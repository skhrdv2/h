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
],
"columnDefs": [
				{
                    "targets":6,
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

    $('.department tbody').on('click', '#edit', function () { //ดึง id มาแก้ไขจาก datatable
            var data = t.row($(this).parents('tr')).data();
			//alert(data['department_id']);
			$("#department_forms").modal();
		$.post(url,{acc:"query_edit",sql:data['department_id']})
                    .done(function (data) {

                        var ard = JSON.parse(data);
                        $("#department_name").val(ard['department_name']);
						$("#department_head_cid").val(ard['cid']).change()
						$("#department_status").val(ard['department_status']);
						$("#BtnAcc").attr("class", "btn btn-warning edit");
						$("#acc").val("edit");
						$("#department_id").val(ard['department_id']);
						$("#department_tel").val(ard['department_tel']);
					
                    });      
                  
        });
    //จบการแก้ไข
    $('.department tbody').on('click', '#delete', function () {//ดึง id มาลบ datatable
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
                    sql:data['department_id'],
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
          $("#departfrm").validate({
            rules: {
                department_name:
                        { required: true,
                            minlength: 3,
                         //   maxlength: 10,
                         /*   remote: {
                                url: "modules/usermanager/chk_user.php",
                                type: "post"
                            }*/
                        },
            },
            messages: {
                department_name: {
                    required: "ห้ามมีค่าว่าง ",
                    minlength: "อย่างน้อย 3 ตัวอักษร",
                },
				
			},
				submitHandler: function (form) {
					$.ajax({
		 url:url,
		 type:"POST",
		 datatype:"json",
		 data:{acc:$("#acc").val(),department_name:$("#department_name").val(),
		    department_status:$("#department_status").val(),
			department_head_cid:$("#department_head_cid").val(),
			person_id_search:$("#person_id_search").val(),
			department_id:$("#department_id").val(),
			department_tel:$('#department_tel').val()},
			 success:function(data){
				 console.log(data);
				$('#department_forms').modal('hide');
				$("#department_name").val("");
				$("#person_id_search").val('');
				$("#department_head_cid").val('').trigger('change');
				$("#acc").val('');
				$("#department_id").val('');
				$("#department_tel").val('');
			   	msg_warnig(data);
			 	t.ajax.reload();
		  },
		 
	 });
             },	

    });//จบ validator                
});
</script>
		  <form action="" id="depart_subfrm" name="depart_subfrm" method="POST">
		  
		  <div class="modal fade" id="department_sub_forms"  >
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h2 class="modal-title" id="exampleModalLabel">เพิ่มฝ่าย/งาน</h2>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						
							</button>
						</div>
						<div class="modal-body">
						<!--ส่วนแสดงฟอร์ม-->	
						<div class="form-group col-12">
						<label for="department_sub_name">ชื่อฝ่าย/งาน</label>
						<input type="text" class="form-control" name="department_sub_name" id="department_sub_name">
						</div>
						<div class="form-group col-12">
													<label for="department_id">กลุ่มงาน</label>
													<select name="department_id" id="department_id" class="select22 form-control" style="width:100%">
   														<option value="">ระบุ</option>
  														 <?php $result=$Db->query("SELECT * FROM hrd_department ");
														foreach($result AS $row){?>
   														<option value="<?=$row['department_id'];?>"><?=$row['department_name'];?></option>
														<?php  }?>
  													</select>
													</div>
													<div class="form-group col-12">
													<label for="department_sub_head_cid">หัวหน้าฝ่าย/งาน</label>
													<select name="department_sub_head_cid" id="department_sub_head_cid" class="select22 form-control" style="width:100%">
   														<option value="">ระบุ</option>
  														 <?php $result=$Db->query("SELECT ps.*,CONCAT(pn.prename_name,ps.fname,'   ',ps.lname) AS fullname FROM hrd_person ps
   						    										left outer join hrd_prename pn ON pn.prename_id=ps.prename_id ");
														foreach($result AS $row){?>
   														<option value="<?=$row['cid'];?>"><?=$row['fullname'];?></option>
														<?php  }?>
  													</select>
													</div>
													<div class="form-group col-12">
						<label for="department_sub_tel">เบอร์โทร</label>
						<input name="department_sub_tel" id="department_sub_tel" class="form-control">							
						</div>
						<div class="form-group col-12">
						<label for="department_sub_status">สถานะ</label>
						<select name="department_sub_status" id="department_sub_status" class="form-control">
						<option value="Y">เปิดใช้งาน</option>
						<option value="N">ปิดใช้งาน</option>
						</select>							
						</div>
					
								<input type="text"  id="person_id_search">
								<input type="text"  id="acc">
								<input type="text"  id="department_sub_id">

						</div><!--จบส่วนแสดงฟอร์ม-->
						<div class="modal-footer">
							<button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" id="SaveBtn" class="btn btn-success">บันทึกข้อมูล</button>
						
						</div>
					</div>
				</div>
			</div>
		  </form>	
								