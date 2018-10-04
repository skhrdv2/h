<section id="footer">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">ตั้งค่าผู้บริหาร</h4>
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
					<p class="card-text"><!-- ใส่ข้อความตรงนี้ -->
					</p>
					<button class="btn btn-success mr-1 inputs-submin" id="btnfrm"><i class="ft-file"></i>&nbsp; เพิ่ม</button>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered  department">
                                <thead>
                                    <tr>
										<th></th>
                                        <th>ชื่อสกุล</th>
                                        <th>ตำแหน่ง</th>
                                        <th>วันที่รับตำแหน่ง</th>
                                        <th>วันที่สิ้นสุดตำแหน่ง</th>
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
	var url="data/setting_org_leader_data.php";
	$.fn.dataTable.ext.errMode = 'throw';
	var t =$('.department').DataTable({
	
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
	{"data":"hrd_leader_name"},
	{"data":"org_leader_position_name"},
	{"data":"hrd_leader_startdate"},
	{"data":"hrd_leader_enddate"},
	{"data":"org_leader_status"},

	
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
    $('.select2').select2();
    
    $("#btnfrm").click(function(){
		$("#acc").val("save");
		$("#org_ledey_forms").modal();
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
                        $("#old_department_name").val(ard['department_name']);
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
       
          //เริ่ม validator
          $("#orgfrm").validate({
            rules: {
                hrd_leader_name:
                {       required: true,
                    
						
				},
            },
            messages: {
                hrd_leader_name: {
                    required: "กรุณาเลือกชื่อ",
                   
                   
                },
				
			},
				submitHandler: function (form) {
                   
		$.ajax({
		 url:url,
		 type:"POST",
		 datatype:"json",
         data:{
            acc:$("#acc").val(),
            hrd_leader_name:$("#hrd_leader_name").val(),
		    org_leader_position_name:$("#org_leader_position_name").val(),
			org_leader_status:$("#org_leader_status").val(),
			hrd_leader_startdate:$("#hrd_leader_startdate").val()},
			//department_id:$("#department_id").val(),
			
			 success:function(data){
				 console.log(data);
				$('#org_ledey_forms').modal('hide');
			    $("#hrd_leader_name").val('').trigger('change');
				$("#org_leader_position_name").val('');
				$("#acc").val('');
				$("#hrd_leader_startdate").val('');
			   	msg_warnig(data);
			 	t.ajax.reload();
		  },
       
	 });
             },	

    });//จบ validator   
  
    $('.datepicker').datepicker({
    autoclose: true,
    language: "th-th",
    format: 'yyyy-mm-dd',
    todayHighlight: true,
    
});

});
</script>
	<div class="modal fade text-left" id="org_ledey_forms" role="dialog" aria-labelledby="myModalLabel33" >
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<label class="modal-title text-text-bold-600" id="myModalLabel33">เพิ่มชื่อผู้บริหาร</label>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													  <span aria-hidden="true">&times;</span>
													</button>
												</div>
                                                <form action="" id="orgfrm" name="orgfrm" method="POST">
											  	  <div class="modal-body">
                                                  
					
                        <div class="form-group">
								<label for="hrd_leader_name">ชื่อ-สกุล</label>
								<select  class="form-control select2" name="hrd_leader_name" id="hrd_leader_name" style="width:100%">
                                <option value="">ระบุ</option>
                                <?php $resalut=$Db->query("SELECT ps.cid,CONCAT(pn.prename_name,ps.fname,'   ',ps.lname) AS fullname FROM hrd_person ps
                                                            left outer join hrd_prename pn ON pn.prename_id=ps.prename_id ");
                                    foreach($resalut AS $row) {?>
                                   
                                    <option value="<?=$row['fullname'];?>"><?=$row['fullname'];?></option>
                                    <?php }?>
  								</select>
											</div>
                        <div class="row">
                        <div class="form-group col-md-12">
						<label for="org_leader_position_name">ตำแหน่ง</label>
						<input name="org_leader_position_name" id="org_leader_position_name" class="form-control">							
						</div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
						<label for="hrd_leader_startdate">วันที่รับตำแหน่ง</label>
						<input name="hrd_leader_startdate" id="hrd_leader_startdate" class="form-control datepicker" autocomplete="off"  >							
						</div>
						<div class="form-group col-md-6">
						<label for="org_leader_status">สถานะ</label>
						<select name="org_leader_status" id="org_leader_status" class="form-control">
						<option value="Y">เปิดใช้งาน</option>
						<option value="N">ปิดใช้งาน</option>
						</select>							
						</div>
                        </div>
                        
					
								<input type="text"  id="person_id_search">
								<input type="text"  id="acc">
								<input type="text"  id="department_id">
                                <input type="text"  id="old_department_name">
												  </div> <!-- จบ modal body -->
												  <div class="modal-footer">
                                                  <button type="reset"  class="btn btn-secondary" data-dismiss="modal">Close</button>
							                      <button type="submit"  class="btn btn-success">บันทึกข้อมูล</button>
						
												  </div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
 
		  
		 