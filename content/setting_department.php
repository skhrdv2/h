<section id="footer">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">ตั้งค่ากลุ่มงาน</h4>
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
					<p class="card-text">The foundation for DataTables is progressive enhancement, so it is very adept at reading table information directly from the DOM. This example shows how easy it is to add searching, ordering and paging to your HTML table by simply running DataTables on it.
					</p>
					<button class="btn btn-success mr-1 inputs-submin" id="btnfrm"><i class="ft-file"></i>&nbsp; เพิ่ม</button>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered  department">
                                <thead>
                                    <tr>
										<th></th>
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
	var url="data/setting_department_data.php";
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
	{"data":"department_name"},
	{"data":"head_department"},
	{"data":"department_tel"},
	{"data":"department_status"},
	{"data":"last_update"},

	
],
"columnDefs": [
				{
                    "targets":6,
                    "data": null,
					"defaultContent":" <button type='button' class='btn btn-outline-secondary mr-1'><i class='fa fa-pencil'></i></button> <button type='button' class='btn btn-outline-danger mr-1'><i class='fa fa-trash-o'></i></button>",
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
        } );
    } ).draw();
	$('.buttons-print,.buttons-excel').addClass('btn btn-primary mr-1');
    $('.select_head_department').select2({
        placeholder: 'Select an item',
        selectOnClose: true,
        ajax: {
          url: 'data/search_head_department.php',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
    });
    $("#btnfrm").click(function(){
				$("#acc").val("save");
				$("#department_forms").modal();
		});
});
</script>
	<div class="modal fade text-left" id="department_forms" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<label class="modal-title text-text-bold-600" id="myModalLabel33">Inline Login Form</label>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													  <span aria-hidden="true">&times;</span>
													</button>
												</div>
                                                <form action="" id="departfrm" name="departfrm" method="POST">
											  	  <div class="modal-body">
                                                  
						<label for="department_name">กลุ่มงาน</label>
                        <div class="form-group">
                        	<input type="text" class="form-control" name="department_name" id="department_name">
                        </div>
                        <div class="form-group">
								<label for="department_head_cid">หัวหน้ากลุ่มงาน</label>
								<select name="department_head_cid" id="department_head_cid" class="form-control select_head_department" style="width:100%">
   								
  											</select>
											</div>
                        <div class="row">
                        <div class="form-group col-md-6">
						<label for="department_tel">เบอร์โทร</label>
						<input name="department_tel" id="department_tel" class="form-control">							
						</div>
						<div class="form-group col-md-6">
						<label for="department_status">สถานะ</label>
						<select name="department_status" id="department_status" class="form-control">
						<option value="Y">เปิดใช้งาน</option>
						<option value="N">ปิดใช้งาน</option>
						</select>							
						</div>
                        </div>
                        
					
								<input type="text"  id="person_id_search">
								<input type="text"  id="acc">
								<input type="text"  id="department_id">
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
 
		  
		 