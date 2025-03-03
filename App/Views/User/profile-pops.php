
 
<div class="row">
    <div class="col-md-6">
        <h2><a href="#" data-toggle="modal" data-target="#msgModal" style="float: left; margin-bottom: 10px;"><img src="/Images/Body/msgcount1.gif" alt="Email" style="width: 50px; margin-right: 10px;"> Send <?= $viewUser['fname']; ?> a Message</a></h2>      
    </div>
    <div class="col-md-6">
        <h2><a href="#" data-toggle="modal" data-target="#pokeModal" style="float: right; margin-bottom: 5px;"><img src="/Images/Body/love.gif" alt="Poke" style="width: 50px; margin-right: 10px;"> Send <?= $viewUser['fname']; ?> a Poke</a></h2>
    </div>
</div>



<!-- Message Modal -->
<div class="modal fade review-bx-reply" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background: #fff;">
            <div class="modal-header">
                <h5 class="modal-title" style="float: center; padding: 10px; font-weight: 600;">Send <?= $viewUser['fname']; ?> <?= $viewUser['lname']; ?> a Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <textarea class="form-control" placeholder="Send a Message to the <?= $viewUser['fname']; ?>" rows="5"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" id="checkRate" class="btn-secondry add-item m-r5">Send Message <i class="ti-arrow-right"></i> </button>
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
                <h5 class="modal-title" style="float: center; padding: 10px; font-weight: 600;">Make The First Move On <?= $viewUser['fname']; ?> <?= $viewUser['lname']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="/Images/Body/love.gif" alt="Poke Icon" style="width: 150px;">
                <button type="button" class="btn-secondry add-item m-r5">Poke <?= $viewUser['fname']; ?></button>
                <br>
                <p style="text-align: center; font-size: 12px;">This a Good Way To Start a Conversation With <?= $viewUser['fname']; ?> <?= $viewUser['lname']; ?>. <br>Pokes Are Free!</p>
            </div>
        </div>
    </div>
</div>
<!-- End Poke Modal -->