
      <div class="content-detached content-right">
          <div class="content-body"><section class="row">
	<div class="col-12">
	    <div class="card">
	        <div class="card-head">
	            <div class="card-header">
	            	<h4 class="card-title"></h4>
		            <a class="heading-elements-toggle"><i class="ft-ellipsis-h font-medium-3"></i></a>
        			<div class="heading-elements">
		                <button class="btn btn-primary btn-lg"><i class="ft-plus white"></i> เพิ่มเจ้าหน้าที่</button>
            			<span class="dropdown">
	                        <button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-warning dropdown-toggle dropdown-menu-right btn-lg"><i class="ft-download-cloud white"></i></button>
	                        <span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
	                            <a href="#" class="dropdown-item"><i class="ft-upload"></i> Import</a>
	                            <a href="#" class="dropdown-item"><i class="ft-download"></i> Export</a>
	                            <a href="#" class="dropdown-item"><i class="ft-shuffle"></i> Find Duplicate</a>
	                        </span>
	                    </span>
            			<button class="btn btn-default btn-lg"><i class="ft-settings white"></i></button>
		            </div>
	            </div>
	        </div>
	        <div class="card-content">
	            <div class="card-body">
	                <!-- Task List table -->
	                <div class="table-responsive">
		                <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
					        <thead>
					            <tr>
								<th></th>
								
					                <th></th>
									<th>ชื่อ-สกุล</th>
					                <th>ตำแหน่ง</th>
					              
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
					        <tfoot>
					            <tr>
								<th></th>
								<th></th>
								
					                <th>ชื่อ-สกุล</th>
					               <th></th>
					        </tfoot>
					    </table>
				    </div>
				</div>
			</div>
		</div>
	</div>
</section>
          </div>
        </div>
        <div class="sidebar-detached sidebar-left" ="">
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
	{"data":"department_name"},
	
],
"columnDefs": [
				{
                    "targets":1,
                    "data": null,
					"defaultContent":"<span class='dropdown'> <button id='btnSearchDrop2' type='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'"+
					" class='btn btn-primary dropdown-toggle dropdown-menu-right'><i class='ft-settings'></i></button>"+
					"<span aria-labelledby='btnSearchDrop2' class='dropdown-menu mt-1 dropdown-menu-right'><a href='#' class='dropdown-item'><i class='ft-edit-2'></i> แก้ไข</a>"+
					"<a href='#' class='dropdown-item'><i class='ft-edit-2'></i> ลบ</a></span></span> ",
					
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