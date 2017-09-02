<section>
    <div class="container">
    	<div class="row">
        	<div class="col-xs-12 co-sm-12 col-md-12 col-lg-12">
          		<div class="card my-account-card">
            		<div class="my-account">
            			<div class="row">
        				    <div class="account-sidebar">
        				        <div class="account-profile">
        				            <div class="image">
        				                <img src="/images/profile-pic.png" alt="Account Name"/>
        				            </div>
        				            <div class="profile-name"><?php echo ucwords(Yii::app()->user->getState('nama')); ?></div>
        				        </div>
        				    </div>
        				</div>
            			<div class="inner">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<h3 class="head-account mb20">User Dashboard
										<a href="/logout" data-toggle="modal" class="btn btn-xs btn-hijau btn-bordered">Logout</a>
									</h3>
									<div class="row">
							          	<div class="col-sm-12 col-sm-6 col-md-6 col-lg-6">
							                <div class="form-group">
			                                  	<label>Full Name</label>
			                                  	<div class="form-info"><?php echo ucwords(Yii::app()->user->getState('nama')); ?></div>
			                                </div>
							                <div class="form-group">
			                                  	<label>Email</label>
			                                  	<div class="form-info"><?php echo Yii::app()->user->getState('email'); ?></div>
			                                </div>
							                <div class="form-group">
			                                  	<label>Photo</label>
			                                  	<div class="form-info"><?php echo Yii::app()->user->getState('photo'); ?></div>
			                                </div>
							          	</div>
										<div class="col-sm-12 col-sm-6 col-md-6 col-lg-6"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
