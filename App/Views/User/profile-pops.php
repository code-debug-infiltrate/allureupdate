            <!-- Update Preferences ==== -->
            <div class="section-area section-sp2 bg-fix ovbl-dark join-bx text-center" style="background-image:url(/Images/Banner/4.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="join-content-bx text-white">
								<h4><a href="javascript:void(0);" data-toggle="modal" data-target="#msgModal"><img src="/Images/Body/msg.gif" alt="Email" style="width: 80px;"> Say Hi To <?= $viewUser['fname']; ?> </a></h4>
							</div>
						</div>
                        <div class="col-md-2">
                            <div class="join-content-bx text-white">
                            </div>
                        </div>
                        <div class="col-md-4">
							<div class="join-content-bx text-white">
								<h4><a href="javascript:void(0);" data-toggle="modal" data-target="#pokeModal"><img src="/Images/Body/love.gif" alt="Poke" style="width: 80px; margin-right: 10px;"> Poke <?= $viewUser['fname']; ?> </a></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Update Preferences END ==== -->



            <!-- Message Modal -->
            <div class="modal fade review-bx-reply" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background: #fff;">
                        <div class="modal-header">
                            <h5 class="modal-title" style="float: center; padding: 10px; font-weight: 600;">Send <?= $viewUser['fname']; ?> a Message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="msgMessage_box text-center mt-2" style="margin: 10px;"></div>

                            <textarea class="form-control" id="firstmsg" placeholder="Send a Message to the <?= $viewUser['fname']; ?>" rows="5"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="msgUser" class="btn-secondry add-item m-r5">Send Message <i class="ti-arrow-right"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Message Modal -->




            <!-- Poke Modal -->
            <div class="modal fade review-bx-reply" id="pokeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background: #fff;">
                        <div class="modal-header">
                            <h5 class="modal-title" style="float: center; padding: 10px; font-weight: 600;">Want To Make The First Move?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="pokeMessage_box text-center mt-2" style="margin: 10px;"></div>

                            <a href="javascript:void(0);" id="pokeUser"> 
                                <h2 class="text-center">Poke <?= $viewUser['fname']; ?></h2>
                                <input type="hidden" value="<?= $viewUser['uniqueid']; ?>" id="buddyid" required>
                                <center><img src="/Images/Body/love.gif" alt="Poke Icon" style="width: 150px;"></center>
                                <br>
                                <p style="text-align: center; font-size: 12px;">It's a Good Way To Start a Conversation With <?= $viewUser['fname']; ?>. <br>Pokes Are Free!</p>
                            </a>

                            <div class="mt-5 mb-5" id="poked" style="display: none;">
                                <h2 class="text-center"><?= $viewUser['fname']; ?> <?= $viewUser['lname']; ?> Got Your Poke!</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Poke Modal -->


<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/poke-user.js') ?>"></script>