
   
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">ตั้งค่าคำนำหน้าชื่อ</h4>
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
					<p class="card-text"> 
					</p>
				
                        <div class="table-responsive">
                            <table  class="table table-striped table-bordered prename_tb ">
                                <thead>
                                    <tr>
                                    <th></th>
                                   <th></th>
													<th>คำนำหน้าชื่อ</th>
													<th>เพศ</th>
                                                    <th >Lastupdate</th>
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

<!-- Footer callback table -->
<script>
$(document).ready(function() {
    
	var url="data/setting_prename_data.php";
	$.fn.dataTable.ext.errMode = 'throw';
	var t =$('.prename_tb').DataTable({
        "pageLength":10,
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
    {
                              /*  'sTitle': '<input type="checkbox"  class="checkbox" id="check-all">',*/
                                'mData': 'prename_status',
                                'mRender': function (prename_status) {
                                    if(prename_status=="Y"){
                                        return '<input type="checkbox" name="status"   class="switchstatus" class="checkbox" checked>';
                                    }else{
                                        return '<input type="checkbox" name="status"  class="switchstatus" class="checkbox" >';
                                    }
                                   
                                },
                                'sWidth': '15px',
                                'bSortable': false
                            },
	{"data":"prename_name"},
	{"data":"sex_name"},
	{"data":"prename_lastupdate"},
	
],

"fnDrawCallback": function() {
    $(".switchstatus").bootstrapSwitch({
        onColor:"success", offColor:"danger", onText: 'เปิด',
               offText: 'ปิด',
    });
},

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
   
t.on('switchChange.bootstrapSwitch','input[name="status"]', function(event, state) {
    var data = t.row($(this).parents('tr')).data();
   //  alert(data['prename_id']);
   $.ajax({
       url:url,
       type:"POST",
       data:{acc:"edit_status",prename_id:data['prename_id'],state:state},
        success:function(data){
     
        }
   });
});

});
</script>
	