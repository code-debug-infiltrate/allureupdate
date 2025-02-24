<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			<div class="ttr-sidebar-logo">
				<a href="<?= baseURL('us-profile-settings/'); ?><?= $userInfo['uniqueid']; ?>/#profileImage"><img alt="Logo" src="<?= public_asset('/other_assets/Profile/') ?><?= $userInfo['profileimage']; ?>" style="border-radius: 50%; height: 40px; width: 40px;"></a>

				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
				
				<span class="ttr-label">
					<b id="grtnMsg1" style="font-size: 18px;"></b>
            		<br />
            		<i style="font-size: 14px; text-transform: capitalize;"> <?= $userInfo['username']; ?></i>
				</span>

				<!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons ttr-fixed-icon">gps_fixed</i>
					<i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
				</div> -->
			</div>
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul> 
					<li>
						<a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-home"></i></span>
		                	<span class="ttr-label">Home Page</span>
		                </a>
		            </li>
					<li class="ttr-seperate"></li>
					
					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-support"></i></span>
		                	<span class="ttr-label">Support </span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="#" data-toggle="modal" data-target="#supportModal" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Quick Cash</span></a>
		                	</li>
		                	<li>
		                		<a href="#" data-toggle="modal" data-target="#supportModal" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i> KYC</span></a>
		                	</li>
							<li>
		                		<a href="<?= baseURL('us-business-support/'); ?><?= $userInfo['uniqueid']; ?>/?cat=All" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Support Page</span></a>
		                	</li>
		                </ul>
		            </li>

					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-layout-accordion-list"></i></span>
		                	<span class="ttr-label"> Tools</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="#" data-toggle="modal" data-target="#businessToolsModal" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Bulk SMS</span></a>
		                	</li>
							<li>
		                		<a href="#" data-toggle="modal" data-target="#businessToolsModal" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Bulk Recharge Cards</span></a>
		                	</li>
		                	<li>
		                		<a href="#" data-toggle="modal" data-target="#businessToolsModal" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Sim Hoisting</span></a>
		                	</li>
							<li>
		                		<a href="#" data-toggle="modal" data-target="#businessToolsModal" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>SMS OTP</span></a>
		                	</li>
							<li>
		                		<a href="#" data-toggle="modal" data-target="#businessToolsModal" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Voice OTP</span></a>
		                	</li>
							<li>
		                		<a href="<?= baseURL('us-business-tools/'); ?><?= $userInfo['uniqueid']; ?>/?cat=All" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Tools Page</span></a>
		                	</li>
		                </ul>
		            </li>

					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-mobile"></i></span>
							<span class="ttr-label">Utility</span>
							<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
						</a>
						<ul>
							<li>
								<a href="#" data-toggle="modal" data-target="#educationalModal" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Educational Pin</span></a>
							</li>
							<li>
								<a href="#" data-toggle="modal" data-target="#electricityModal" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Electricity</span></a>
							</li>
							<li>
								<a href="<?= baseURL('us-internet-data/')?><?= $userInfo['uniqueid']; ?>/"  class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Internet Data</span></a>
							</li>
							<li>
								<a href="<?= baseURL('us-global-cards/')?><?= $userInfo['uniqueid']; ?>/"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Global Cards</span></a>
							</li>
							<li>
								<a href="<?= baseURL('us-local-cards/')?><?= $userInfo['uniqueid']; ?>/"  class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Local Cards</span></a>
							</li>
							<li>
								<a href="<?= baseURL('us-smile-voice/')?><?= $userInfo['uniqueid']; ?>/"  class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Smile Voice</span></a>
							</li>
							<li>
								<a href="#" data-toggle="modal" data-target="#tvSubscriptionModal" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>TV Subscription</span></a>
							</li>
							<li>
								<a href="<?= baseURL('us-bill-payment/'); ?><?= $userInfo['uniqueid']; ?>/?cat=All" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Bill Pay Page</span></a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-wallet"></i></span>
		                	<span class="ttr-label">Wallet</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
								<a href="#" data-toggle="modal" data-target="#addBalanceModal" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Add Money</span></a>
		                	</li>
							
							<li>
								<a href="<?= baseURL('us-crypto-currency/')?><?= $userInfo['uniqueid']?>/?cat=All" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Crypto Currency</span></a>
		                	</li>

							<li>
								<a href="#" data-toggle="modal" data-target="#converterModal" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Exchange Rate</span></a>
		                	</li>

							<?php if ($userInfo['wallet'] > "50") { ?>
							<li>
								<a href="#" data-toggle="modal" data-target="#internalTransferModal" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Fondo Pay</span></a>
		                	</li>
		                	<li>
								<a href="<?= baseURL('us-other-transfer/')?><?= $userInfo['uniqueid']?>/" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>All Transfer</span></a>
		                	</li>
							<?php } ?>
							<li>
								<a href="#" data-toggle="modal" data-target="#virtualAccountModal" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Virtual Account</span></a>
		                	</li>
							<li>
		                		<a href="<?= baseURL('us-transactions/'); ?><?= $userInfo['uniqueid']; ?>/?cat=All" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Wallet Page</span></a>
		                	</li>
		                </ul>
		            </li>

					<li class="ttr-seperate"></li>
					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-comments"></i></span>
							<span class="ttr-label">Messages</span>
							<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
						</a>
						<ul>
							<li>
								<a href="<?= baseURL('us-messages/'); ?><?= $userInfo['uniqueid']; ?>/?cat=All" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Tickets</span></a>
							</li>
							<li>
								<a href="<?= baseURL('us-notifications/'); ?><?= $userInfo['uniqueid']; ?>/?cat=All" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i> Notifications</span></a>
							</li>
						</ul>
					</li>
										
		            <li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-settings"></i></span>
		                	<span class="ttr-label"> Settings</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="<?= baseURL('us-account-settings/'); ?><?= $userInfo['uniqueid']; ?>/" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Account</span></a>
		                	</li>

		                	<li>
		                		<a href="<?= baseURL('us-profile-settings/'); ?><?= $userInfo['uniqueid']; ?>/" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Profile</span></a>
		                	</li>

		                </ul>
		            </li>
					
		            <li>
						<a href="<?= baseURL('us-referrals/'); ?><?= $userInfo['uniqueid']; ?>/" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-link"></i></span>
		                	<span class="ttr-label">Referral</span>
		                </a>
		            </li>
		            <li class="ttr-seperate"></li>

					<li>
						<a href="<?= baseURL('us-need-help/'); ?><?= $userInfo['uniqueid']; ?>/" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-help-alt"></i></span>
		                	<span class="ttr-label">Need Help?</span>
		                </a>
		            </li>
		            <li class="ttr-seperate"></li>

		            <li>
						<a href="<?= baseURL('logout/'); ?><?= $userInfo['uniqueid']; ?>/" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-power-off"></i></span>
		                	<span class="ttr-label">Log Out</span>
		                </a>
		            </li>
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->