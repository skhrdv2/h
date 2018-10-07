
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                    <h4 class="card-title">ตั้งค่าตำแหน่ง</h4>
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
					        <p class="card-text"><button id="btnfrm" class="btn btn-success btn-lg"><i class="ft-plus white"></i> เพิ่มตำแหน่ง</button></p>
                            <div class="table-responsive">
                                <table  class="table table-striped table-bordered position_tb ">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>ชื่อตำแหน่ง</th>
													<th>รหัสตำแหน่ง</th>
													<th>fte</th>
                                                    <th >ประเภทวิชาชีพ</th>
                                                    <th>จ18</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>
</div>
<!-- Footer callback table -->
<script type="text/javascript" src="app-assets/vendors/js/forms/formatter/formatter.min.js"></script>
<script>
$(document).ready(function() {
	var url="data/setting_position_data.php";
	$.fn.dataTable.ext.errMode = 'throw';
	var t =$('.position_tb').DataTable({
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
        'mData': 'position_status',
        'mRender': function (position_status) {
        if(position_status=="Y"){
        return '<input type="checkbox" name="status"   class="switchstatus" class="checkbox" checked>';
        }else{
        return '<input type="checkbox" name="status"  class="switchstatus" class="checkbox" >';
             }
                                   
            },
                                'sWidth': '15px',
                                'bSortable': false
                            },
	{"data":"position_name"},
    {"data":"position_location_code"},
	{"data":"position_fte"},
	{"data":"position_groups_name"},
	{"data":"position_j18"},

],
"columnDefs": [
				{
                    "targets":7,
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
    // alert(data['position_id']);
   $.ajax({
       url:url,
       type:"POST",
       data:{acc:"edit_status",position_id:data['position_id'],state:state},
        success:function(data){
     
        }
   });
});
$("#btnfrm").click(function(){
        $(".error").text("");
		$("#position_name").val("");
        $("#position_location_code").val("");
        $("#position_groups_id").val("");
        $("#fte").val("");
        $("#j18").val("");
		$("#acc").val("save");
		$("#position_modal").modal();
        });

//เริ่ม validator
$("#positionfrm").validate({
            rules: {
               position_name:
                 {          required: true,
							remote: {
                                url: "data/chk_used.php",
                                type: "post",
                                data: {
                          chk_position_name: function()
                          { return $('#chk_position_name').val();}
                                      }
                            },
						},
                position_groups_id:{ required:true },
            },
            messages: {
                position_name: {
                    required: "กรุณากรอกชื่อตำแหน่งค่ะ",
					remote:   "ชื่อตำแหน่งนี้มีในระบบแล้วค่ะ"
				},
                position_groups_id:{required:"กรุณาเลือกประเภทวิชาชีพค่ะ"},
			},
				submitHandler: function (form) {
					$.ajax({
		 url:url,
		 type:"POST",
		 datatype:"json",
		 data:{acc:$("#acc").val(),position_name:$("#position_name").val(),
         position_location_code:$("#position_location_code").val(),position_groups_id:$("#position_groups_id").val(),fte:$("#fte").val(),
		 j18:$("#j18").val(),position_id:$("#position_id").val()
		 
		 },
			 success:function(data){
				// console.log(data);
				$('#position_modal').modal('hide');
				$("#acc").val('');
			   	msg_warnig(data);
			 	t.ajax.reload();
		  },
		 
	 });
        },	

	});//จบ validator 

     $('.position_tb tbody').on('click', '#edit', function () { //ดึง id มาแก้ไขจาก datatable
            var data = t.row($(this).parents('tr')).data();
			//alert(data['person_id']);
			$(".error").text("");
			$("#position_modal").modal();
		$.post(url,{acc:"query_edit",sql:data['position_id']})
                    .done(function (data) {
                        var ard = JSON.parse(data);
						$("#acc").val("edit");
						$("#position_name").val(ard['position_name']);
						$("#chk_position_name").val(ard['position_name']);
						$("#position_location_code").val(ard['position_location_code']);
						$("#position_groups_id").val(ard['position_groups_id']);
						$("#fte").val(ard['position_fte']);
						$("#j18").val(ard['position_j18']);
						$("#position_id").val(ard['position_id']);
						
                    });      
                  
        });
    //จบการแก้ไข
    $('.position_tb tbody').on('click', '#delete', function () {//ดึง id มาลบ datatable
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
                    sql:data['position_id'],
                    acc: 'delete'
                    }).done(function (data) {
					//console.log(data);
							msg_warnig(data);
                            t.ajax.reload();
                          
                        });
  }
});
    });//จบการลบ    
// SSN
/*$('.ssn-formatter').formatter({
		'pattern': "{{9}}-{{9}}-{{999}}"
	});*/
});

</script>
   <form class="form form-horizontal" id="positionfrm" name="personfrm">
<div class="modal fade text-left" id="position_modal" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
													<label class="modal-title text-text-bold-600" >เพิ่มตำแหน่ง</label>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													  <span aria-hidden="true">&times;</span>
													</button>
			</div>
                                              
											  	  <div class="modal-body"><!-- บอดี้ -- ><!-->
                                                  
<section id="">
	<div class="row">
	    <div class="col-md-12">
	        <div class="card">

	            <div class="card-content">
	                <div class="card-body">
	               
	                    	<div class="form-body">
								<div class="row">
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="position_name">ชื่อตำแหน่ง<span class="red">*</span></label>
											<input type="text" id="position_name" class="form-control"  name="position_name">
										</div>
									</div>
                                    <div class="col-md-6">
									<div class="form-group">
											<label for="position_location_code">รหัสตำแหน่ง</label>
											<input type="text" id="position_location_code" class="form-control ssn-formatter"  name="position_location_code">
										</div>
									</div>
								</div>
			                  
								<div class="row">
                                <div class="col-md-4">
										<div class="form-group">
											<label for="position_groups_id">ประเภทวิชาชีพ<span class="red">*</span></label>
											<select  id="position_groups_id" class="form-control" name="position_groups_id">
											<option value="">โปรดระบุ</option>
											<?php $resalt=$Db->query("SELECT * from hrd_position_groups");
											foreach($resalt AS $row){ ?>
											<option value="<?=$row['position_groups_id'];?>"><?=$row['position_groups_name'];?></option>
											<?php } ?>
											</select>
										</div>
									</div>
                                    <div class="col-md-4">
                                    <div class="form-group">
											<label for="fte">FTE</label>
											<input type="text" id="fte" class="form-control"  name="fte">
										</div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
											<label for="j18">จ18</label>
											<input type="text" id="j18" class="form-control"  name="j18">
										</div>
										</div>
									</div>
				
	            </div>
	        </div>
	    </div>
	</div>

	<input type="hidden" id="acc">
	<input type="hidden" id="chk_position_name">
	<input type="hidden" id="position_id">
						
</section>


	  </div> <!-- จบ modal body -->
												  <div class="modal-footer">
                                                  <button type="reset"  class="btn btn-secondary" data-dismiss="modal">Close</button>
							                      <button type="submit"  class="btn btn-success">บันทึกข้อมูล</button>
						
												  </div>
												
											</div>
										</div>
										</form>	