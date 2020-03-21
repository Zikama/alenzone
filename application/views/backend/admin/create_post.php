<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <form class="required-form" action="<?php echo site_url('admin/posts/add'); ?>" enctype="multipart/form-data" method="post">
                    <div>

                        <div class="tab_-content b-0 mb-0">

                            <div class="tab_-pane">
                                <div class="row">
                                    <div class="col-12">

                                        <div class="form-group row mb-3">
                                            <div class="row">
                                                <input type="text" class="form-control art_form_title" id="title" name="title" placeholder="<?php echo get_phrase('post_title'); ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-3">
                                            <div class="row">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="post_image" name="post_image" accept="image/*" onchange="changeTitleOfImageUploader(this)" required>
                                                        <label class="custom-file-label" for="post_image"><?php echo get_phrase('choose_post_image'); ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-3">
                                            <div class="row art_chop ">
                                                <textarea name="description" id="summernote-basic" class="form-control" required></textarea>
                                            </div>
                                        </div>


                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>
                        </div>

                        <ul class="list-inline mb-0 wizard text-center">
                            <li class=" list-inline-item">
                                <div class="mb-3">
                                    <button type="button" class="btn btn-primary" onclick="checkRequiredFields()" name="button"><?php echo get_phrase('submit'); ?></button></div>

                            </li>
                        </ul>

                    </div> <!-- tab-content -->
            </div> <!-- end #progressbarwizard-->
            </form>

        </div> <!-- end card-body -->
    </div> <!-- end card-->
</div>
</div>