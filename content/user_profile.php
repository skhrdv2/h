
      <div class="content-detached content-right">
          <div class="content-body"><section class="row">
	<div class="col-12">
	    <div class="card">
	        <div class="card-head">
	            <div class="card-header">
	            
		            <a class="heading-elements-toggle"><i class="ft-ellipsis-h font-medium-3"></i></a>
	            </div>
	        </div>
	        <div class="card-content">
	            <div class="card-body">
				<p class="card-text">
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
        <div class="text-center">
               
                    <img src="app-assets/images/portrait/avatar-m-4.png" class="rounded-circle  height-150 mb-2" alt="Card image">
               
                    <h4 class="card-title"><span id="fullname"></span></h4>
                    <h6 class="card-subtitle text-muted">ตำแหน่ง : <span id="position_name"></span></h6>
              
        </div>
        <hr>
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

<script type="text/javascript">
$(document).ready(function(){
    var person_id='<?php echo $_SESSION['person_id'];?>';
    $.ajax({
        url:"data/user_profile_data.php",
        type:"post",
        data:{req:'req',person_id:person_id},
        success:function(data){
            console.log(data);
           var ard = JSON.parse(data);
          $("#fullname").text(ard['fname']+' '+ard['lname']);
          $("#position_name").text(ard['position_name']);
        }
    })
});


</script>