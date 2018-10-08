
      <div class="content-detached content-right">
          <div class="content-body"><section class="row">
	<div class="col-12">
	    <div class="card">
	        <div class="card-head">
	            <div class="card-header">
	            	<h4 class="card-title">ทะเบียนบุคคลากร</h4>
		            <a class="heading-elements-toggle"><i class="ft-ellipsis-h font-medium-3"></i></a>
	            </div>
	        </div>
	        <div class="card-content">
	            <div class="card-body">
				<p class="card-text"><button id="btnfrm" class="btn btn-success btn-lg"><i class="ft-plus white"></i> เพิ่มเจ้าหน้าที่</button></p>
	                <!-- Task List table -->
	                <div class="table-responsive">
		                <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
					        <thead>
					            <tr>
								    <th></th>
					                <th></th>
									<th>ชื่อ-สกุล</th>
					                <th>ตำแหน่ง</th>
					                <th></th>
					            </tr>
					        </thead>
					        <tbody>
					         <!--   <tr>
					                
					                <td>
					                	<div class="media">
							                <div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
							                <div class="media-body media-middle">
							                    <a href="#" class="media-heading">Alice Collins</a>
							                </div>
							            </div>
					                </td>
				                    <td class="text-center">
					                	<a href="mailto:email@example.com">alice@example.com</a>
					                </td>
					                <td>+658-254-256</td>
					                <td class="text-center"><i class="fa fa-star  yellow darken-2"></i></td>
					                <td>
					                	<span class="dropdown">
					                        <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
					                        <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
					                            <a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit</a>
					                            <a href="#" class="dropdown-item"><i class="ft-trash-2"></i> Delete</a>
					                            <a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
					                            <a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
					                            <a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
					                            <a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
					                        </span>
					                    </span>
					                </td>
					            </tr>-->
					        </tbody>
					    </table>
				    </div>
				</div>
			</div>
		</div>
	</div>

          </div>
        </div>
        <div class="sidebar-detached sidebar-left">
          <div class="sidebar"><div class="bug-list-sidebar-content">
    <!-- Predefined Views -->
    <div class="card">
       
        <!-- contacts view -->
        <div class="card-body">
            <div class="list-group">
                <a href="#" class="list-group-item active">All Contacts</a>
                <a href="#" class="list-group-item list-group-item-action">Recently contacted</a>
                <a href="#" class="list-group-item list-group-item-action">Favorite contacts</a>
            </div>
        </div>
        
        <!-- Groups-->
        <div class="card-body">
            <p class="lead">Groups</p>
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="badge badge-primary badge-pill float-right">14</span> <a href="#"> Project</a>
                </li>
                <li class="list-group-item">
                    <span class="badge badge-info badge-pill float-right">22</span> <a href="#"> Team</a>
                </li>
                <li class="list-group-item">
                    <span class="badge badge-warning badge-pill float-right">10</span> <a href="#"> Clients</a>
                </li>
                <li class="list-group-item">
                    <span class="badge badge-success badge-pill float-right">5</span> <a href="#"> Friends</a>
                </li>
            </ul>
        </div>
        <!--/ Groups-->

       

    </div>
    <!--/ Predefined Views -->

</div>
          </div>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
	<script>
$(document).ready(function() {
	var url="data/person_list_data.php";
	$.fn.dataTable.ext.errMode = 'throw';
	var t =$('#users-contacts').DataTable({
	
		"oLanguage": {
			"sEmptyTable":     "ไม่มีข้อมูลในตาราง",
    "sInfo":           "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
    "sInfoEmpty":      "แสดง 0 ถึง 0 จาก 0 แถว",
    "sInfoFiltered":   "(กรองข้อมูล _MAX_ ทุกแถว)",
    "sInfoPostFix":    "",
    "sInfoThousands":  ",",
    "sLengthMenu":     "แสดง _MENU_ แถว",
    "sLoadingRecords": "กำลังโหลดข้อมูล...",
    "sProcessing":     "กำลังดำเนินการ...",
    "sSearch":         "ค้นหา: ",
    "sZeroRecords":    "ไม่พบข้อมูล",
    "oPaginate": {
        "sFirst":    "หน้าแรก",
    "sPrevious": "ก่อนหน้า",
        "sNext":     "ถัดไป",
    "sLast":     "หน้าสุดท้าย"
    },
    "oAria": {
        "sSortAscending":  ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
    "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
    }
                         },
	"ajax":{ 
                    "url":url,
                    "type":"post",
                    "data":{
                        req:'req'}
				},
				"aoColumns": [
    {null:null},
    {null:null},
    { "data": function (data, type, dataToSet) {
        return data.prename_name + data.fname + " " + data.lname;
    },
	},
	{"data":"cid"},
	{"data":"position_name"},
	
],
"columnDefs": [
				{
                    "targets":1,
                    "data": null,
					"defaultContent":"<div class='form-group'><div class='btn-group mr-1 mb-1'>"+
                                        "<button type='button' class='btn btn-icon btn-primary dropdown-toggle' data-toggle='dropdown'"+
										" aria-haspopup='true' aria-expanded='false'><i class='fa ft-settings'></i></button>"+
                                       	"<div class='dropdown-menu'>"+ 
                                       " <a id='edit' class='dropdown-item' href='#'> แก้ไข</a>"+    
                                        " <a id='delete' class='dropdown-item' href='#'>ลบ</a>"+   
                                      	" </div> ",
					
					'bSortable': false
				},
				
				
],
	dom: 'flrtipB',
	buttons: [
             'excel','print'
        ]

});
t.on( 'order.dt search.dt', function () {
        t.column(0,{search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        });
    } ).draw();
	$('.buttons-print,.buttons-excel').addClass('btn btn-primary mr-1');
    $('.select2').select2();

	
    $("#btnfrm").click(function(){

		$(".show_department_sub").remove();
		$("#cid").show();$("#cid").val("");$("#old_cid").hide();$("#old_cid").text("");$("#chk_cid").val("");
		$("#acc").val("save");$(".error").text("");$("#birthday").val("");$("#prename_id").val("");$("#position_id").val('').trigger('change');
		$("#fname").val("");$("#lname").val("");$("#startwork_date").val("");$("#department_id").val("");$("#department_sub_id").val("");
		$("#position_id").val("");
		$("#person_modal").modal();
        });

          //เริ่ม validator
          $("#personfrm").validate({
            rules: {
               cid:
                 { required: true,
                            minlength:13,
							remote: {
                                url: "data/chk_used.php",
                                type: "post",
                                data: {
                          chk_cid: function()
                          { return $('#chk_cid').val();}
                                      }
                            },
						},
				birthday:{required:true},
				prename_id:{required:true},
				fname:{required:true},		
				lname:{required:true},
				startwork_date:{required:true},
				department_id:{required:true},
				department_sub_id:{required:true},
				position_id:{required:true},
            },
            messages: {
                cid: {
                    required: "กรุณากรอกเลขบัตรประชาชนค่ะ",
					minlength:"เลขบัตรประชาชนต้องมี 13 หลักค่ะ",
					remote:   "เลขบัตรประชาชนนี้มีในระบบแล้วค่ะ"
				},
					birthday:{required:"กรุณาเลือกวันเกิดค่ะ"},
					prename_id:{required:"กรุณาเลือกคำนำหน้าชื่อค่ะ"},
					fname:{required:"กรุณากรอกชือค่ะ"},
					lname:{required:"กรุณากรอกนามสกุลค่ะ"},
					startwork_date:{required:"กรุณาเลือกวันเริ่มทำงานค่ะ"},
					department_id:{required:"กรุณาเลือกกลุ่มงานค่ะ"},
					department_sub_id:{required:"กรุณาเลือกฝ่าย/งานค่ะ"},
					position_id:{required:"กรุณาเลือกตำแหน่งค่ะ"},
				
			},
				submitHandler: function (form) {
					$.ajax({
		 url:url,
		 type:"POST",
		 datatype:"json",
		 data:{acc:$("#acc").val(),
         cid:$("#cid").val(),
		 birthday:$("#birthday").val(),person_id:$("#person_id").val(),prename_id:$("#prename_id").val(),
		 fname:$("#fname").val(),lname:$("#lname").val(),startwork_date:$("#startwork_date").val(),department_id:$("#department_id").val(),
		 department_sub_id:$("#department_sub_id").val(),position_id:$("#position_id").val()
		 
		 },
			 success:function(data){
				// console.log(data);
				$('#person_modal').modal('hide');
				$("#acc").val('');
		 		
			   	msg_warnig(data);
			 	t.ajax.reload();
		  },
		 
	 });
        },	

	});//จบ validator  

	 $('#users-contacts tbody').on('click', '#edit', function (){ //ดึง id มาแก้ไขจาก datatable
            var data = t.row($(this).parents('tr')).data();
			//alert(data['person_id']);
			$(".error").text("");
			$("#cid").hide();
			$("#old_cid").show();
			$("#person_modal").modal();
		$.post(url,{acc:"query_edit",sql:data['person_id']})
                    .done(function (data) {
                        var ard = JSON.parse(data);
						$("#acc").val("edit");$("#old_cid").text(ard['cid']);$("#cid").val(ard['cid']);$("#chk_cid").val(ard['cid']);
						$("#person_id").val(ard['person_id']);$("#birthday").val(ard['birthday']);$("#prename_id").val(ard['prename_id']);
						$("#fname").val(ard['fname']);$("#lname").val(ard['lname']);
						$("#startwork_date").val(ard['startwork_date']);$("#department_id").val(ard['department_id']);
						$("#department_sub_id").val(ard['department_sub_id']);$("#position_id").val(ard['position_id']).change()
							
						

						
					}); 
		
        });
    //จบการแก้ไข
    $('#users-contacts tbody').on('click', '#delete', function () {//ดึง id มาลบ datatable
            var data = t.row($(this).parents('tr')).data();
            swal({
  title: 'คุณแน่ใจไหม?',
  text: "การลบนี้อาจมีผลกระทบข้อมูลของโปรแกรม!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'ใช่,ดำเนินการลบต่อไป!'
}).then((result) => {
  if (result.value) {
    $.post(url, {
                    sql:data['person_id'],
                    acc: 'delete'
                }).done(function (data) {
					//console.log(data);
							msg_warnig(data);
                            t.ajax.reload();
                          
                        });
  }
});
    });//จบการลบ   
	 $('.datepicker').datepicker({
    autoclose: true,
    language: "th-th",
    format: 'yyyy-mm-dd',
	todayHighlight: true,});
	
		//เลื้อกแผนกฝ่าย
		$.ajax({  //แสดงชื่อแผนกทั้งหมด
		url:"data/search_department.php",
		dataType: "json",
		data:{show_department:'show_department'}, 
		success:function(data){
			//console.log(data);
			$.each(data, function( index, value ) {
				  $("#department_id").append("<option value='"+ value.id +"'> " + value.name + "</option>");
			});
			
		}
	});
	$.ajax({  //
		url:"data/search_department.php",
		dataType: "json",
		data:{show_depart_sub:'show_depart_sub'}, 
		success:function(data){
			console.log(data);
			$.each(data, function( index, value ) {
			$("#department_sub_id").append("<option class='show_department_sub' value='"+ value.id +"'> " + value.name + "</option>");
			});
			
		}
	});
	$("#department_id").change(function(){
	//	alert($("#department_id").val());
	 $(".show_department_sub").remove();
		$.ajax({
		url:"data/search_department.php",
		dataType: "json",
	   	data:{show_department_sub:'show_department_sub',department_id:$("#department_id").val()}, 
	   	success:function(data){
			  // console.log(data);
			  
		   $.each(data, function(index,value ) {
				 $("#department_sub_id").append("<option class='show_department_sub' value='"+ value.id +"'> " + value.name + "</option>");
		   });
	   }
   	});
	});
	
});
</script>
     <form class="form form-horizontal" id="personfrm" name="personfrm">
<div class="modal fade text-left" id="person_modal" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
													<label class="modal-title text-text-bold-600" id="myModalLabel33">เพิ่มเจ้าหน้าที่</label>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													  <span aria-hidden="true">&times;</span>
													</button>
			</div>
                                              
											  	  <div class="modal-body"><!-- บอดี้ -- ><!-->
                                                  
<section id="horizontal-form-layouts">
	<div class="row">
	    <div class="col-md-12">
	        <div class="card">

	            <div class="card-content">
	                <div class="card-body">
	               
	                    	<div class="form-body">
	                    		<h4 class="form-section"><i class="ft-user"></i> ข้อมูลส่วนตัว</h4>
								<div class="row">
									
									<div class="col-md-4">
										<div class="form-group">
											<label for="cid">เลขบัตรประชาชน<span class="red">*</span></label>
											<input type="text" id="cid" class="form-control"  name="cid">
											<span id="old_cid" class="form-control"  name="old_cid"></span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="birthday">วันเกิด<span class="red">*</span></label>
											<input type="text" id="birthday" class="form-control date-formatter datepicker"  name="birthday" readonly>
										</div>
									</div>
								</div>
			                  
								<div class="row">
										<div class="col-md-4">
										<div class="form-group">
											<label for="prename_id">คำนำหน้า<span class="red">*</span></label>
											<select  id="prename_id" class="form-control " name="prename_id" style="width:100%">
											<option value="">โปรดระบุ</option>
											<?php $resalt=$Db->query("SELECT * from hrd_prename WHERE prename_status='Y'");
											foreach($resalt AS $row){ ?>
											<option value="<?=$row['prename_id'];?>"><?=$row['prename_name'];?></option>
											<?php } ?>
											</select>
										</div>
										</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="fname">ชื่อ<span class="red">*</span></label>
											<input type="text" id="fname" class="form-control"  name="fname">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="lname">นามสกุล<span class="red">*</span></label>
											<input type="text" id="lname" class="form-control"  name="lname">
										</div>
									</div>
									</div>
								</div>
								<h4 class="form-section"><i class="fa fa-eye"></i> ข้อมูลการทำงานทั่วไป</h4>
								<div class="row">
									
									<div class="col-md-4">
										<div class="form-group">
											<label for="startwork_date">วันเริ่มทำงาน<span class="red">*</span></label>
											<input type="text" id="startwork_date" class="form-control datepicker"  name="startwork_date">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="department_id">กลุ่มงาน<span class="red">*</span></label>
											<select  id="department_id" class="form-control" name="department_id">
											<option value="">โปรดระบุ</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="department_sub_id">ฝ่าย/งาน<span class="red">*</span></label>
											<select  id="department_sub_id" class="form-control" name="department_sub_id">
											<option value="">โปรดระบุ</option>
											
											</select>
										</div>
									</div>
								</div>
			                 
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="cid">ตำแหน่ง<span class="red">*</span></label>
											<select  id="position_id" class="form-control select2" name="position_id" style="width:100%">
											<option value="">โปรดระบุ</option>
											<?php $resalt=$Db->query("SELECT * from hrd_position WHERE position_status='Y'");
											foreach($resalt AS $row){ ?>
											<option value="<?=$row['position_id'];?>"><?=$row['position_name'];?></option>
											<?php } ?>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="person_type_id">ประเภท<span class="red">*</span></label>
											<select  id="person_type_id" class="form-control" name="person_type_id">
											<option value="">โปรดระบุ</option>
											<?php $resalt=$Db->query("SELECT * from hrd_person_type");
											foreach($resalt AS $row){ ?>
											<option value="<?=$row['person_type_id'];?>"><?=$row['person_type_name'];?></option>
											<?php } ?>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="position_groups_id">ประเภทวิชาชีพ<span class="red">*</span></label>
											<select  id="position_groups_id" class="form-control" name="position_group_id">
											<option value="">โปรดระบุ</option>
											<?php $resalt=$Db->query("SELECT * from hrd_position_groups");
											foreach($resalt AS $row){ ?>
											<option value="<?=$row['position_groups_id'];?>"><?=$row['position_groups_name'];?></option>
											<?php } ?>
											</select>
										</div>
									</div>
									</div>
										<h4 class="form-section"><i class="fa fa-eye"></i> ข้อมูลจำเพาะวิชาชีพ</h4>
										 
									<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label for="work_register_date">วันบรรจุ</label>
											<input type="text" id="work_register_date" class="form-control datepicker"  name="work_register_date">
										</div>
									</div>
										<div class="col-md-3">
										<div class="form-group">
											<label for="vcode">รหัส ว.</label>
											<input type="text"  id="vcode" class="form-control" name="vcode">
										
										</div>
										</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="fname">เลขที่ใบประกอบวิชาชีพ</label>
											<input type="text" id="fname" class="form-control"  name="fname">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="book">ตำแหน่งหนังสือราชการ</label>
											<input type="text" id="book" class="form-control"  name="book">
										</div>
									</div>
								</div>

									<div class="row">
								
									<div class="col-md-4">
										<div class="form-group">
											<label for="fname">เลขที่ใบประกอบวิชาชีพ</label>
											<input type="text" id="fname" class="form-control"  name="fname">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="book">ตำแหน่งหนังสือราชการ</label>
											<input type="text" id="book" class="form-control"  name="book">
										</div>
									</div>
								</div>

	                  
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<input type="hidden" id="acc">
	<input type="hidden" id="chk_cid">
	<input type="hidden" id="person_id">
						
</section>


	  </div> <!-- จบ modal body -->
												  <div class="modal-footer">
                                                  <button type="reset"  class="btn btn-secondary" data-dismiss="modal">Close</button>
							                      <button type="submit"  class="btn btn-success">บันทึกข้อมูล</button>
						
												  </div>
												
											</div>
										</div>
										</form>

									