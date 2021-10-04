@extends('Admin_UI.layouts.master')
@section('contect')
<section>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Grid Rows</h5>
                    <form class="" method="post" action="">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="position-relative mb-3">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" id="title" name="title" placeholder="Enter title" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input name="email" id="email" placeholder="Enter email" type="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input name="phone" placeholder="Phone number" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative mb-3">
                                    <label for="short_content" class="form-label">Short content</label>
                                    <textarea type="text" id="short_content" class="form-control" name="short_content" placeholder="Enter short content" row="1"> </textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative mb-3">
                                    <label for="exampleAddress" class="form-label">Address</label>
                                    <textarea name="address" placeholder="1234 Main St" type="text" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                                                <div class="row">
                            <h5 class="card-title">Social accounts</h5>
                           <div class="col-md-3">
                               <div class="position-relative mb-3">
                                   <label for="facebook" class="form-label">Facebook</label>
                                   <input name="facebook" placeholder="Facebook account" type="text" class="form-control">
                               </div>
                           </div>
                            <div class="col-md-3">
                                <div class="position-relative mb-3">
                                    <label for="youtube" class="form-label">Youtube</label>
                                    <input name="youtube" placeholder="Youtube account" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative mb-3">
                                    <label for="twitter" class="form-label">Twitter</label>
                                    <input name="twitter" placeholder="Twitter account" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative mb-3">
                                    <label for="linkedin" class="form-label">Linked in</label>
                                    <input name="linkedin" placeholder="Linked in account" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button class="mt-2 btn btn-primary contactSubmit">Submit</button>
                    </form>
                </div>
            </div>

</section>
@endsection
