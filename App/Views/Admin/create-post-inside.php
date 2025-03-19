<div class="card">
    <div class="card-body">
        <h5 class="card-title">Vertical Form</h5>
                <form method="POST" action="" class="edit-phto" enctype="multipart/form-data">
                    <input type="hidden" name="uniqueid" value="<?= $adminInfo['uniqueid']; ?>" required>
                    <input type="hidden" name="username" value="<?= $adminInfo['username']; ?>" required>
                    <input type="hidden" name="url" id="url" value="<?= trim(getenv('APP_LINK')); ?>/news/">

                  <div class="col-md-12 row">

                    <center>
                        <b style="margin-left: 20px;"> Create a New Blog Post. Fill Out All Form Fields Accurately. (Attach Only Two Images To Blog Post) </b>
                    </center>
                
                    <div class="col-md-6" style="margin-top: 20px;">

                    <center><figure><img src="" id="output_postimage" alt="" style="max-height: 300px;"></figure></center>

                    <div class="card card-secondary">

                        <!-- form start -->
                        <div class="card-body">

                            <div class="form-group">
                            <label for="exampleInputEmail1">Images</label>
                            <input type="file" class="form-control" id="postimage" name="postimage[]" placeholder="Blog Post Images" onchange="validatePostImage(event)" accept="image/*" multiple required>
                            </div>

                            <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="title" maxlength="80" placeholder="Title Of Post" required>
                            </div>

                            <div class="form-group">
                            <label for="exampleInputEmail1">Subject</label>
                            <input type="text" class="form-control" name="subject" maxlength="170" placeholder="Subject Of The Post" required>
                            </div>

                            <div class="form-group">
                            <label for="exampleInputEmail1">Introduction</label>
                            <textarea class="form-control" name="introduction" rows="3" maxlength="400" placeholder="Brief Introduction To The Blog Post" required></textarea>
                            </div>

                            <div class="form-group">
                            <label for="exampleInputEmail1">Tags</label>
                            <input type="text" class="form-control" name="tags" maxlength="300" placeholder="Post Tags" required>
                            </div>

                            <div class="form-group">
                            <label for="exampleInputEmail1">Category</label>
                            <select class="form-control" name="category">
                                <option value="Dating">Dating</option>
                                <option value="Relationship">Relationship</option>
                                <option value="Marriage">Marriage</option>
                                <option value="Motivationals">Motivationals</option>
                                <option value="Spirituality">Spirituality</option>
                                <option value="Life Hacks">Life Hacks</option>
                            </select>
                            </div>

                            <div class="form-group">
                            <label for="exampleInputEmail1" style="color: red;">Status</label>
                            <select class="form-control" name="status">
                                <option value="Draft">Draft</option>
                                <option value="Publish">Publish</option>
                                <option value="New">New</option>
                                <option value="Trash">Trash</option>
                            </select>
                            </div>

                        </div>
                        </div>
                    </div>

                    <div class="col-md-6" style="margin-top: 20px;">

                        <div class="card card-secondary">
                        <!-- form start -->
                        <div class="card-body">

                            <div class="form-group">
                            <label for="exampleInputEmail1">Post Body <i style="color: red; font-size: 10px;">Use full stop and 2 spaces (.  ) to break new line</i></label>
                            <textarea class="form-control" name="details" rows="15" maxlength="10000" placeholder="Tell The World About The Post Content" required></textarea>
                            </div>

                            <div class="form-group">
                            <label for="exampleInputEmail1">Post Conclusion</label>
                            <textarea class="form-control" name="conclusion" rows="3" maxlength="500" placeholder="Tell The World About The Post Conclusion" required></textarea>
                            </div>

                            <div class="form-group row">
                            <div class="col-sm-10">
                                <img src="/Images/green-dots.gif" id="bioLoader" style="display: none"/>
                                <button type="submit" name="createPost" class="btn btn-default"><span>Create Blog Post</span></button>
                            </div>
                            </div>

                        </div>
                        </div>
                
                    </div>

                </div>
            </form>