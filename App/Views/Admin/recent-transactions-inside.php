<?php if ($recentTransactions) { ?>
<!-- Recent Sales -->
    <div class="col-12">
        <div class="card recent-sales overflow-auto">

        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
                <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
        </div>

        <div class="card-body">
            <h5 class="card-title"> Transactions <span>| Latest</span></h5>

            <table class="table table-borderless datatable">
            <thead>
                <tr>
                <th scope="col">Tran-ID</th>
                <th scope="col">Customer</th>
                <th scope="col">Type</th>
                <th scope="col">Amount</th>
                <th scope="col">Status</th>
                <th scope="col"> Msg </th>
                <th scope="col"> OK </th>
                <th scope="col"> XL </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recentTransactions as $key => $tranc) { ?>
                <tr style="font-size: 13px;">

                    <th scope="row"><?= substr($tranc['trancid'], 5); ?></th>

                    <td>
                        <?php foreach ($userProfiles as $key => $user) { ?>
                            <?php if ($user['uniqueid'] == $tranc['uniqueid']) { ?>  
                                <?= $user['fname']; ?> <?= $user['lname']; ?>
                            <?php } ?>
                        <?php } ?>
                    </td>

                    <td><?= $tranc['type']; ?></td>

                    <td><?= $curInfo['currency']; ?><?= number_format($tranc['amount']); ?></td>

                    <td>
                        <?php if ($tranc['status'] == "Completed") { ?>
                            <span class="badge bg-success">Completed</span>
                        <?php } elseif ($tranc['status'] == "Processing") { ?>
                            <span class="badge bg-warning">Pending</span>
                        <?php } else { ?>
                            <span class="badge bg-danger"><?= $tranc['status']; ?></span>
                        <?php } ?>
                    </td>

                    <td>
                        <?php if ($tranc['status'] == "Processing") { ?>
                            <form method="POST" action="<?= baseURL('all-payment/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=<?= $tranc['type']; ?>&s=All">
                                <input type="hidden" name="uniqueid" value="<?= $adminInfo['uniqueid']; ?>">
                                <input type="hidden" name="username" value="<?= $adminInfo['username']; ?>">
                                <input type="hidden" name="uUniqueid" value="<?= $tranc['uniqueid']; ?>">
                                <input type="hidden" name="trancid" value="<?= $tranc['trancid']; ?>">
                                <input type="hidden" name="status" value="<?= $tranc['status']; ?>">
                                <input type="hidden" name="type" value="<?= $tranc['type']; ?>">
                                <input type="hidden" name="amount" value="<?= $tranc['amount']; ?>">
                                <input type="hidden" name="currency" value="<?= $curInfo['currency']; ?>">
                                <button type="submit" name="sendReminder" class="btn btn-outline-secondary btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Send Reminder Email" style="background: none; color: black; margin: 5px; font-size: 20px;"><i class="bi bi-envelope"></i></button>
                            </form>
                        <?php } ?>    
                    </td>
                    <td>
                        <?php if ($tranc['status'] == "Processing") { ?>
                            <form method="POST" action="<?= baseURL('all-payment/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=<?= $tranc['type']; ?>&s=All">
                                <input type="hidden" name="uniqueid" value="<?= $adminInfo['uniqueid']; ?>">
                                <input type="hidden" name="username" value="<?= $adminInfo['username']; ?>">
                                <input type="hidden" name="uUniqueid" value="<?= $tranc['uniqueid']; ?>">
                                <input type="hidden" name="trancid" value="<?= $tranc['trancid']; ?>">
                                <input type="hidden" name="status" value="Completed">
                                <input type="hidden" name="type" value="<?= $tranc['type']; ?>">
                                <input type="hidden" name="amount" value="<?= $tranc['amount']; ?>">
                                <input type="hidden" name="currency" value="<?= $curInfo['currency']; ?>">
                                <button type="submit" name="updateTranc" class="btn btn-outline-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Complete Transaction" style="background: none; color: green; margin: 5px; font-size: 20px;"><i class="bi bi-check"></i></button>
                            </form>
                        <?php } ?>    
                    </td>
                    <td>
                        <?php if ($tranc['status'] == "Processing") { ?>
                            <form method="POST" action="<?= baseURL('all-payment/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=<?= $tranc['type']; ?>&s=All">
                                <input type="hidden" name="uniqueid" value="<?= $adminInfo['uniqueid']; ?>">
                                <input type="hidden" name="username" value="<?= $adminInfo['username']; ?>">
                                <input type="hidden" name="uUniqueid" value="<?= $tranc['uniqueid']; ?>">
                                <input type="hidden" name="trancid" value="<?= $tranc['trancid']; ?>">
                                <input type="hidden" name="status" value="Cancelled">
                                <input type="hidden" name="type" value="<?= $tranc['type']; ?>">
                                <input type="hidden" name="amount" value="<?= $tranc['amount']; ?>">
                                <input type="hidden" name="currency" value="<?= $curInfo['currency']; ?>">
                                <button type="submit" name="updateTranc" class="btn btn-outline-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cancel Transaction" style="background: none; color: orange; margin: 5px; font-size: 20px;"><i class="bi bi-trash"></i></button>
                            </form>
                        <?php } elseif ($tranc['status'] == "Cancelled") { ?>  
                            <form method="POST" action="<?= baseURL('all-payment/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=<?= $tranc['type']; ?>&s=All">
                                <input type="hidden" name="uniqueid" value="<?= $adminInfo['uniqueid']; ?>">
                                <input type="hidden" name="username" value="<?= $adminInfo['username']; ?>">
                                <input type="hidden" name="uUniqueid" value="<?= $tranc['uniqueid']; ?>">
                                <input type="hidden" name="trancid" value="<?= $tranc['trancid']; ?>">
                                <input type="hidden" name="status" value="Trash">
                                <input type="hidden" name="type" value="<?= $tranc['type']; ?>">
                                <input type="hidden" name="amount" value="<?= $tranc['amount']; ?>">
                                <input type="hidden" name="currency" value="<?= $curInfo['currency']; ?>">
                                <button type="submit" name="updateTranc" class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Trash Transaction" style="background: none; color: red; margin: 5px; font-size: 20px;"><i class="bi bi-trash"></i></button>
                            </form> 
                        <?php } ?> 
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            </table>

        </div>

        </div>
    </div><!-- End Recent Sales -->

<?php } ?>