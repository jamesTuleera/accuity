<div class="row profile">
    <div class="col-lg-6 col-sm-12 bg-dark p-3">
        <div class="profile-sidebar card bg-dark shadow rounded pb-5 pt-5">
            <!-- SIDEBAR USERPIC -->
            <div class="text-center">
                {{-- <img src="{{ asset('public_assets/assets/img/verification_icon_female.jpeg') }}" class="img-responsive w-50  mt-3" alt="verification image">
                <img src="{{ asset('public_assets/assets/img/verification_icon_male.jpeg') }}" class="img-responsive w-50  mt-3" alt="verification image"> --}}
            </div>
            <div class="paragraph container">
                <h2 class="text-warning mt-5">Procedure:</h2>
                <h4 class="text-light">
                    In order to verify your account, kindly take a picture with same posture as seen above and upload for verification.
                    <br>
                    Verification may take up to 24 hours.
                </h4>

                <div class="form">
                    <form enctype="multipart/form-data" action="{{ route('submit_verification') }}" method="POST">
                    @csrf
                    <br><br>

                    <label for="">Select ID type</label>

                    <select name="id_type" id="" class="form-control">
                        <option value="voters_card">Voters's card</option>
                        <option value="drivers_liscence">Driver's Liscence</option>
                        <option value="national_id">National ID' card</option>
                    </select>

                    <div class="form-group mt-3">
                        <label for="" class="text-light">Front of ID card</label>
                        <input type="file" name="front" id="" class="form-control text-light">
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="text-light">Back of ID card</label>
                        <input type="file" name="back" id="" class="form-control text-light">
                    </div>
                    <div class="form-group">
                        <button  class="btn btn-md btn-primary">Submit</button>
                    </div>
                </form>
                </div>
            </div>

            <!-- END SIDEBAR USER TITLE -->
            <div class="profile-userbuttons">

            </div>
        </div>
    </div>

</div>
