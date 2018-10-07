<section id="footer">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">ตั้งค่าฝ่าย/งาน</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
					<p class="card-text"> ข้อเสนอแนะ
					</p>
					<button class="btn btn-success mr-1 inputs-submin" id="btnfrm"><i class="ft-file"></i>&nbsp; เพิ่ม</button>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered  department_sub">
                                <thead>
                                    <tr>
										<th></th>
										<th>ฝ่าย/งาน</th>
                                        <th>กลุ่มงาน</th>
                                        <th>หัวหน้ากลุมงาน</th>
                                        <th>เบอร์โทร</th>
                                        <th>สถานะ</th>
                                        <th>วันที่แก้ไขล่าสุด</th>
										
										<th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                </tbody>
                                <tfoot>
                                   
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer callback table -->
<script>
$(document).ready(function() {
	var url="data/setting_department_sub_data.php";
	$.fn.dataTable.ext.errMode = 'throw';
	var t =$('.department_sub').DataTable({
	
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
   { "data":null},
	{"data":"department_sub_name"},
	{"data":"department_name"},
	{"data":"department_head"},
	{"data":"department_sub_tel"},
	{"data":"department_sub_status"},
    {"data":"last_update"},
],
"columnDefs": [
				{
                    "targets":7,
                    "data": null,
					"defaultContent":" <button type='button' id='edit' class='btn btn-outline-secondary mr-1'><i class='fa fa-pencil'></i></button> <button type='button' id='delete' class='btn btn-outline-danger mr-1'><i class='fa fa-trash-o'></i></button>",
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
    $('.select_head_department').select2();
    $("#btnfrm").click(function(){
		$("#acc").val("save");
		$("#department_sub_forms").modal();
        });

    $('.department_sub tbody').on('click', '#edit', function () { //ดึง id มาแก้ไขจาก datatable
            var data = t.row($(this).parents('tr')).data();
			//alert(data['department_id']);
			$("#department_sub_forms").modal();
		$.post(url,{acc:"query_edit",sql:data['department_sub_id']})
                    .done(function (data) {
console.log(data);
                        var ard = JSON.parse(data);
                        $("#department_sub_id").val(ard['department_sub_id']);
                        $("#department_sub_name").val(ard['department_sub_name']);
                        $("#old_department_sub_name").val(ard['department_sub_name']);
						$("#department_head_cid").val(ard['cid']).change()
						$("#department_sub_status").val(ard['department_sub_status']);
						$("#acc").val("edit");
						$("#department_id").val(ard['department_id']).change()
						$("#department_sub_tel").val(ard['department_sub_tel']);
					
                    });      
                  
        });
    //จบการแก้ไข
    $('.department_sub tbody').on('click', '#delete', function () {//ดึง id มาลบ datatable
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
                    sql:data['department_sub_id'],
                    acc: 'delete'
                }).done(function (data) {
					//console.log(data);
							msg_warnig(data);
                            t.ajax.reload();
                          
                        });
  }
});

    });
        //ค้นหา person_id
    	$('#department_head_cid').change(function(){
		$.post("data/search_person_id.php", {cid:$(this).val()}
		).done(function (data) {
        var ard2 = JSON.parse(data);
        $("#person_id_search").val(ard2['person_id']);			
        });
        });	    
        //จบค้นหา person_id

          //เริ่ม validator
          $("#depart_subfrm").validate({
            rules: {
                department_sub_name:
                        { required: true,
                            minlength: 3,
							remote: {
                                url: "data/chk_used.php",
                                type: "post",
                                data: {
                          old_department_sub_name: function()
                          { return $('#old_department_sub_name').val();}
                                      }
                            },
						},
				department_id:
						{
							required:true
						}
            },
            messages: {
                department_sub_name: {
                    required: "ห้ามมีค่าว่าง ",
					minlength: "อย่างน้อย 3 ตัวอักษร",
					remote:"ชื่อถูกใช้ไปแล้ว!"
				},
				department_id:{
					 required:"กรุณาเลือก กลุ่มงาน"
				}
				
			},
				submitHandler: function (form) {
					$.ajax({
		 url:url,
		 type:"POST",
		 datatype:"json",
		 data:{acc:$("#acc").val(),
         department_sub_name:$("#department_sub_name").val(),
		 department_head_cid:$("#department_head_cid").val(),
         department_sub_id:$("#department_sub_id").val(),
		 person_id_search:$("#person_id_search").val(),
		 department_id:$("#department_id").val(),
		 department_sub_tel:$('#department_sub_tel').val(),
         department_sub_status:$("#department_sub_status").val()},
			 success:function(data){
				 console.log(data);
				$('#department_sub_forms').modal('hide');
				$("#department_sub_name").val("");
                $("#old_department_sub_name").val("");
				$("#person_id_search").val('');
				$("#department_head_cid").val('').trigger('change');
				$("#acc").val('');
				$("#department_id").val('').trigger('change');
				$("#department_sub_tel").val('');
			   	msg_warnig(data);
			 	t.ajax.reload();
		  },
		 
	 });
        },	

    });//จบ validator                
});
</script>
<div class="modal fade text-left" id="department_sub_forms" role="dialog" aria-labelledby="myModalLabel33" >
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<label class="modal-title text-text-bold-600" id="myModalLabel33">Inline Login Form</label>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													  <span aria-hidden="true">&times;</span>
													</button>
												</div>
                                                <form action="" id="depart_subfrm" name="depart_subfrm" method="POST">
											  	  <div class="modal-body">
                                                  
					
                        <div class="form-group">
                        <label for="department_sub_name">ชื่อฝ่าย/งาน</label>
						<input type="text" class="form-control" name="department_sub_name" id="department_sub_name">
                        </div>
                            <div class="form-group">
                             <label for="department_id">กลุ่มงาน</label>
								<select name="department_id" id="department_id" class="select_head_department form-control" style="width:100%">
   														<option value="">ระบุ</option>
  														 <?php $result=$Db->query("SELECT * FROM hrd_department ");
														foreach($result AS $row){?>
   														<option value="<?=$row['department_id'];?>"><?=$row['department_name'];?></option>
														<?php  }?>
  													</select>
                            </div>
	                       
                        <div class="form-group">
								<label for="department_head_cid">หัวหน้ากลุ่มงาน</label>
								<select  class="form-control select_head_department" name="department_head_cid" id="department_head_cid" style="width:100%">
                                <option value="">ระบุ</option>
                                <?php $resalut=$Db->query("SELECT ps.cid,CONCAT(pn.prename_name,ps.fname,'   ',ps.lname) AS fullname FROM hrd_person ps
                                                            left outer join hrd_prename pn ON pn.prename_id=ps.prename_id ");
                                    foreach($resalut AS $row) {?>
                                   
                                    <option value="<?=$row['cid'];?>"><?=$row['fullname'];?></option>
                                    <?php }?>
  								</select>
											</div>
                        <div class="row">
                        <div class="form-group col-md-6">
						<label for="department_sub_tel">เบอร์โทร</label>
						<input name="department_sub_tel" id="department_sub_tel" class="form-control">							
						</div>
						<div class="form-group col-md-6">
						<label for="department_sub_status">สถานะ</label>
						<select name="department_sub_status" id="department_sub_status" class="form-control">
						<option value="Y">เปิดใช้งาน</option>
						<option value="N">ปิดใช้งาน</option>
						</select>							
						</div>
                        </div>
                        
					
                                <input type="text"  id="person_id_search">
								<input type="text"  id="acc">
								<input type="text"  id="department_sub_id">
                                <input type="text"  id="old_department_sub_name">
												  </div> <!-- จบ modal body -->
												  <div class="modal-footer">
                                                  <button type="reset"  class="btn btn-secondary" data-dismiss="modal">Close</button>
							                        <button type="submit" id="SaveBtn" class="btn btn-success">บันทึกข้อมูล</button>
						
												  </div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
 
		  
		 
		  
	