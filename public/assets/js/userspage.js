
$(document).ready(function(){
	
	//alert('hello2 ' + contextPath);

	var password = $("#inputPassword")
		, confirm_password = $("#inputConfirmPassword");

	function validatePassword(){
		if(password.val() != confirm_password.val()) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		} else {
			confirm_password.setCustomValidity('');
		}
	}

    jQuery('#inputConfirmPassword').on('input propertychange paste', function() {
        // do your stuff
        //alert("changed" + password.val() + " conf: "+ confirm_password.val());
        //validatePassword();
        confirm_password.get(0).setCustomValidity('The two passwords must match.');
        //confirm_password.setCustomValidity("Passwords Don't Match");
    });


	//password.onchange = validatePassword;
	//confirm_password.onkeyup = validatePassword;
	
	var table;
	
    // data tables
	var datatabletoServer = function(sSource, aoData, fnCallback) {
 
 	//extract name/value pairs into a simpler map for use later
	var paramMap = {};
	
	for ( var i = 0; i < aoData.length; i++) {
		paramMap[aoData[i].name] = aoData[i].value;
	}
	
	//page calculations
	var pageSize = paramMap.iDisplayLength;
	var start = paramMap.iDisplayStart;
	var pageNum = (start == 0) ? 1 : Math.floor( (start / pageSize)) + 1; // pageNum is 1 based
	
	//alert("page size "+ pageSize);

	// extract sort information
	var sortCol = paramMap.iSortCol_0;
	var sortDir = paramMap.sSortDir_0;
	var sortName = paramMap['mDataProp_' + sortCol];

	//create new json structure for parameters for REST request
	var restParams = new Array();
	restParams.push({"name" : "size", "value" : pageSize + 1 });
	restParams.push({"name" : "page", "value" : pageNum });
	restParams.push({"name" : "sort", "value" : sortName });
	restParams.push({"name" : sortName + ".dir", "value" : sortDir });

	//if we are searching by name, override the url and add the name parameter
	var url = sSource;
	if (paramMap.sSearch != '') {
		url = contextPath + '/users/all';
		restParams.push({ "name" : "name", "value" : paramMap.sSearch});
	}

	//finally, make the request
	$.ajax({
		"dataType" : 'json',
		"type" : "GET",
		"url" : url,
		"data" : restParams,
		"success" : function(data) {
		//data.iTotalRecords = data.totalCount;
		//data.iTotalDisplayRecords = data.totalCount;
			//alert("page "+ data[0].page +" size "+data[1].size);
		fnCallback(data);
		
		}
	});
};
   
table =	$("#userstable").DataTable({
		"processing": true,
        "serverSide": true,
        "bAutoWidth":false,
        "sAjaxSource": contextPath + '/users/all',
        "sAjaxDataProp" :'aaData',
        "aoColumns" : [
             {
                mDataProp : 'id'
             },
             {
                mDataProp : 'email'
             } ,
             {
                mDataProp : 'name'
             },
             {
                mDataProp : 'role.name'
             },
             {
                //"atargets": [4],
                "mData":null,
                "mRender": function (data, type, full) {

                    return '\
                        <div class="btn-group ">\
                          <a class="btn btn-xs btn-primary" href="#"><i class="fa fa-user fa-fw"></i> User</a>\
                          <a class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown" href="#">\
                            <span class="fa fa-caret-down"></span></a>\
                          <ul class="dropdown-menu">\
                            <li><a href="users/edit/'+data.id+'"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>\
                            <li><a href="users/delete/'+data.id+'"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>\
                            <li><a href="#"><i class="fa fa-ban fa-fw"></i> Ban</a></li>\
                            <li class="divider"></li>\
                            <li><a href="#"><i class="i"></i> Make admin</a></li>\
                          </ul>\
                        </div>\
                    ';
                }
             }
        
        ],
       
       "fnServerData" : datatabletoServer
	});
	
});
