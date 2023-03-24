@extends('layouts.app2')

@section('content2')
    <div id="carouselExampleIndicators" class="carousel slide" data-interval="false"  >
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="jumbotron jumbotron-fluid">
                    <div class="">
                        <h4 class="">Add Service User</h4>
                        <form class="needs-validation" method="POST" action="{{ route('ServiceUser.store') }}">
                            @csrf
                            @method('POST')
                            <span class="row border-top ">
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addTodayDate">Date</label>
                                    <input type="date" class="form-control" id="addtodaydate" required>
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addHOR">Home Office Ref</label>
                                    <input type="text" class="form-control" id="addHOR" name="addHOR"
                                        placeholder="Home Office Ref" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addLS">Legal Status</label>
                                    <input type="text" class="form-control" id="addLS" name="addLS" placeholder="Legal Status"
                                        required="">
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addAM">Assessment method</label>
                                    <select class="custom-select d-block w-100" id="addAM" name="addAM" required="">
                                        <option value="">Choose...</option>
                                        <option>Telephone</option>
                                        <option>In Office</option>


                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addAN">
                                        Assessor name
                                    </label>
                                    <input type="Text" class="form-control" id="addAN" name="addAN" placeholder="Assessor name"
                                        required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                            </span>
                            <span class="row border-top my-2 ">
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addTitle">Title</label>
                                    <input type="text" class="form-control" id="addTitle" name="addTitle" placeholder="Title"
                                        required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addFN">First name</label>
                                    <input type="text" class="form-control" id="addFN" name="addFN" placeholder="First Name"
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addLN">Last name</label>
                                    <input type="text" class="form-control" id="addLN" name="addLN"
                                        placeholder="Last Name" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>

                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addPhone">
                                        Phone NO.
                                    </label>
                                    <input type="text" class="form-control" id="addPhone" name="addPhone" placeholder="Phone"
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addPC">
                                        Postal Code
                                    </label>
                                    <input type="text" class="form-control" id="addPC" name="addPC"
                                        placeholder="POSTAL CODE" required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                            </span>

                            <span class="row border-top ">
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addFA">Full Address</label>
                                    <textarea name="addFA" id="addFA" name="addFA" class="form-control" style="resize: none" cols="10"
                                        rows="4" required=""></textarea>
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>

                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addEthnicity">Ethnicity</label>
                                    <input type="text" class="form-control" id="addEthnicity" name="addEthnicity" placeholder=""
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>

                                    <label for="addLanguage" class="my-1">Language(s)</label>
                                    <input type="text" class="form-control" id="addLanguage" placeholder="" name="addLanguage"
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>


                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addDOF">
                                        Date Of Birth
                                    </label>
                                    <input type="date" class="form-control" id="addDOF" name="addDOF" placeholder=""
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                    <label for="addReligion" class="my-1">
                                        Religion
                                    </label>
                                    <input type="text" class="form-control" id="addReligion" name="addReligion" placeholder=""
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addNINO">National Identify No.</label>
                                    <input type="text" class="form-control" id="addNINO" name="addNINO" placeholder=""
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>

                                    <label for="addTH" class="my-1">Total no. in household</label>
                                    <input type="text" class="form-control" id="addTH" name="addTH" placeholder=""
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>

                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addSpouse">Spouse in uk ?</label>
                                    <select class="custom-select d-block w-100" id="addSpouse" name="addSpouse" required="">
                                        <option value="">Choose...</option>
                                        <option>YES</option>
                                        <option>NO</option>


                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                    <label for="addchildSU" class="my-1">Children with SU in UK ?</label>
                                    <select class="custom-select d-block w-100" id="addchildSU" name="addchildSU" required="">
                                        <option value="">Choose...</option>
                                        <option>YES</option>
                                        <option>NO</option>


                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>

                            </span>




                            <span class="row border-top ">
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addMS">Marital Status</label>
                                    <select class="custom-select d-block w-100" id="addMS" name="addMS" required="">
                                        <option value="">Choose...</option>
                                        <option>United States</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addGender">Gender</label>
                                    <select class="custom-select d-block w-100" id="addGender" name="addGender" required="">
                                        <option value="">Choose...</option>
                                        <option>male</option>
                                        <option>female</option>
                                        <option>other</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addISInterpreter">Interpreter required ?</label>
                                    <select class="custom-select d-block w-100" id="addISInterpreter" name="addISInterpreter"
                                        required="">
                                        <option value="">Choose...</option>
                                        <option>Yes</option>
                                        <option>NO</option>

                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label></label>

                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to Partner</button>
                                        {{-- <a class="" href="#carouselExampleIndicators" data-slide="next">  </a> --}}

                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="radio" class="custom-control-input" id="addAgree" name="addAgree" required
                                        value="1" checked>
                                    <label class="col-md-5 mb-3 mx-2 custom-control-label" for="addAgree"> I give my consent to UKeff
                                        to collect, use and store the personal information held about me in this form for the purpose of
                                        assisting me , Agree ? </label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="radio" class="custom-control-input" id="addAgree2" name="addAgree" required
                                        value="0">
                                    <label class="col-md-5 mb-3 mx-2 custom-control-label" for="addAgree2"> Disagree </label>
                                </div>



                            </span>



                        </form>
                    </div>

                </div>
            </div>
            <div class="carousel-item"  >
                {{-- <div class="jumbotron jumbotron-fluid">
                    <div class="">
                        <h4 class="">Add Service User</h4>
                        <form class="needs-validation" method="POST" action="{{ route('ServiceUser.store') }}">
                            @csrf
                            @method('POST')
                            <span class="row border-top ">
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addTodayDate">Date</label>
                                    <input type="date" class="form-control" id="addtodaydate" required>
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addHOR">Home Office Ref</label>
                                    <input type="text" class="form-control" id="addHOR" name="addHOR"
                                        placeholder="Home Office Ref" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addLS">Legal Status</label>
                                    <input type="text" class="form-control" id="addLS" name="addLS" placeholder="Legal Status"
                                        required="">
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addAM">Assessment method</label>
                                    <select class="custom-select d-block w-100" id="addAM" name="addAM" required="">
                                        <option value="">Choose...</option>
                                        <option>Telephone</option>
                                        <option>In Office</option>


                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addAN">
                                        Assessor name
                                    </label>
                                    <input type="Text" class="form-control" id="addAN" name="addAN" placeholder="Assessor name"
                                        required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                            </span>
                            <span class="row border-top my-2 ">
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addTitle">Title</label>
                                    <input type="text" class="form-control" id="addTitle" name="addTitle" placeholder="Title"
                                        required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addFN">First name</label>
                                    <input type="text" class="form-control" id="addFN" name="addFN" placeholder="First Name"
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addLN">Last name</label>
                                    <input type="text" class="form-control" id="addLN" name="addLN"
                                        placeholder="Last Name" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>

                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addPhone">
                                        Phone NO.
                                    </label>
                                    <input type="text" class="form-control" id="addPhone" name="addPhone" placeholder="Phone"
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addPC">
                                        Postal Code
                                    </label>
                                    <input type="text" class="form-control" id="addPC" name="addPC"
                                        placeholder="POSTAL CODE" required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                            </span>

                            <span class="row border-top ">
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addFA">Full Address</label>
                                    <textarea name="addFA" id="addFA" name="addFA" class="form-control" style="resize: none" cols="10"
                                        rows="4" required=""></textarea>
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>

                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addEthnicity">Ethnicity</label>
                                    <input type="text" class="form-control" id="addEthnicity" name="addEthnicity" placeholder=""
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>

                                    <label for="addLanguage" class="my-1">Language(s)</label>
                                    <input type="text" class="form-control" id="addLanguage" placeholder="" name="addLanguage"
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>


                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addDOF">
                                        Date Of Birth
                                    </label>
                                    <input type="date" class="form-control" id="addDOF" name="addDOF" placeholder=""
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                    <label for="addReligion" class="my-1">
                                        Religion
                                    </label>
                                    <input type="text" class="form-control" id="addReligion" name="addReligion" placeholder=""
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addNINO">National Identify No.</label>
                                    <input type="text" class="form-control" id="addNINO" name="addNINO" placeholder=""
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>

                                    <label for="addTH" class="my-1">Total no. in household</label>
                                    <input type="text" class="form-control" id="addTH" name="addTH" placeholder=""
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>

                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addSpouse">Spouse in uk ?</label>
                                    <select class="custom-select d-block w-100" id="addSpouse" name="addSpouse" required="">
                                        <option value="">Choose...</option>
                                        <option>YES</option>
                                        <option>NO</option>


                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                    <label for="addchildSU" class="my-1">Children with SU in UK ?</label>
                                    <select class="custom-select d-block w-100" id="addchildSU" name="addchildSU" required="">
                                        <option value="">Choose...</option>
                                        <option>YES</option>
                                        <option>NO</option>


                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>

                            </span>




                            <span class="row border-top ">
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addMS">Marital Status</label>
                                    <select class="custom-select d-block w-100" id="addMS" name="addMS" required="">
                                        <option value="">Choose...</option>
                                        <option>United States</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addGender">Gender</label>
                                    <select class="custom-select d-block w-100" id="addGender" name="addGender" required="">
                                        <option value="">Choose...</option>
                                        <option>male</option>
                                        <option>female</option>
                                        <option>other</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addISInterpreter">Interpreter required ?</label>
                                    <select class="custom-select d-block w-100" id="addISInterpreter" name="addISInterpreter"
                                        required="">
                                        <option value="">Choose...</option>
                                        <option>Yes</option>
                                        <option>NO</option>

                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label></label>
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to Partner</button>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="radio" class="custom-control-input" id="addAgree" name="addAgree" required
                                        value="1" checked>
                                    <label class="col-md-5 mb-3 mx-2 custom-control-label" for="addAgree"> I give my consent to UKeff
                                        to collect, use and store the personal information held about me in this form for the purpose of
                                        assisting me , Agree ? </label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="radio" class="custom-control-input" id="addAgree2" name="addAgree" required
                                        value="0">
                                    <label class="col-md-5 mb-3 mx-2 custom-control-label" for="addAgree2"> Disagree </label>
                                </div>



                            </span>



                        </form>
                    </div>

                </div> --}}
            </div>
            <div class="carousel-item">
                {{-- <div class="jumbotron jumbotron-fluid">
                    <div class="">
                        <h4 class="">Add Service User</h4>
                        <form class="needs-validation" method="POST" action="{{ route('ServiceUser.store') }}">
                            @csrf
                            @method('POST')
                            <span class="row border-top ">
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addTodayDate">Date</label>
                                    <input type="date" class="form-control" id="addtodaydate" required>
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addHOR">Home Office Ref</label>
                                    <input type="text" class="form-control" id="addHOR" name="addHOR"
                                        placeholder="Home Office Ref" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addLS">Legal Status</label>
                                    <input type="text" class="form-control" id="addLS" name="addLS" placeholder="Legal Status"
                                        required="">
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addAM">Assessment method</label>
                                    <select class="custom-select d-block w-100" id="addAM" name="addAM" required="">
                                        <option value="">Choose...</option>
                                        <option>Telephone</option>
                                        <option>In Office</option>


                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addAN">
                                        Assessor name
                                    </label>
                                    <input type="Text" class="form-control" id="addAN" name="addAN" placeholder="Assessor name"
                                        required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                            </span>
                            <span class="row border-top my-2 ">
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addTitle">Title</label>
                                    <input type="text" class="form-control" id="addTitle" name="addTitle" placeholder="Title"
                                        required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addFN">First name</label>
                                    <input type="text" class="form-control" id="addFN" name="addFN" placeholder="First Name"
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addLN">Last name</label>
                                    <input type="text" class="form-control" id="addLN" name="addLN"
                                        placeholder="Last Name" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>

                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addPhone">
                                        Phone NO.
                                    </label>
                                    <input type="text" class="form-control" id="addPhone" name="addPhone" placeholder="Phone"
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addPC">
                                        Postal Code
                                    </label>
                                    <input type="text" class="form-control" id="addPC" name="addPC"
                                        placeholder="POSTAL CODE" required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                            </span>

                            <span class="row border-top ">
                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addFA">Full Address</label>
                                    <textarea name="addFA" id="addFA" name="addFA" class="form-control" style="resize: none" cols="10"
                                        rows="4" required=""></textarea>
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>

                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addEthnicity">Ethnicity</label>
                                    <input type="text" class="form-control" id="addEthnicity" name="addEthnicity" placeholder=""
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>

                                    <label for="addLanguage" class="my-1">Language(s)</label>
                                    <input type="text" class="form-control" id="addLanguage" placeholder="" name="addLanguage"
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>


                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addDOF">
                                        Date Of Birth
                                    </label>
                                    <input type="date" class="form-control" id="addDOF" name="addDOF" placeholder=""
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                    <label for="addReligion" class="my-1">
                                        Religion
                                    </label>
                                    <input type="text" class="form-control" id="addReligion" name="addReligion" placeholder=""
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid date is required.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addNINO">National Identify No.</label>
                                    <input type="text" class="form-control" id="addNINO" name="addNINO" placeholder=""
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>

                                    <label for="addTH" class="my-1">Total no. in household</label>
                                    <input type="text" class="form-control" id="addTH" name="addTH" placeholder=""
                                        value="" required="">
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>

                                <div class="col-md-2 mb-3 my-2">
                                    <label for="addSpouse">Spouse in uk ?</label>
                                    <select class="custom-select d-block w-100" id="addSpouse" name="addSpouse" required="">
                                        <option value="">Choose...</option>
                                        <option>YES</option>
                                        <option>NO</option>


                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                    <label for="addchildSU" class="my-1">Children with SU in UK ?</label>
                                    <select class="custom-select d-block w-100" id="addchildSU" name="addchildSU" required="">
                                        <option value="">Choose...</option>
                                        <option>YES</option>
                                        <option>NO</option>


                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>

                            </span>




                            <span class="row border-top ">
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addMS">Marital Status</label>
                                    <select class="custom-select d-block w-100" id="addMS" name="addMS" required="">
                                        <option value="">Choose...</option>
                                        <option>United States</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addGender">Gender</label>
                                    <select class="custom-select d-block w-100" id="addGender" name="addGender" required="">
                                        <option value="">Choose...</option>
                                        <option>male</option>
                                        <option>female</option>
                                        <option>other</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3 my-2">
                                    <label for="addISInterpreter">Interpreter required ?</label>
                                    <select class="custom-select d-block w-100" id="addISInterpreter" name="addISInterpreter"
                                        required="">
                                        <option value="">Choose...</option>
                                        <option>Yes</option>
                                        <option>NO</option>

                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3 my-2">
                                    <label></label>
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to Partner</button>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="radio" class="custom-control-input" id="addAgree" name="addAgree" required
                                        value="1" checked>
                                    <label class="col-md-5 mb-3 mx-2 custom-control-label" for="addAgree"> I give my consent to UKeff
                                        to collect, use and store the personal information held about me in this form for the purpose of
                                        assisting me , Agree ? </label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="radio" class="custom-control-input" id="addAgree2" name="addAgree" required
                                        value="0">
                                    <label class="col-md-5 mb-3 mx-2 custom-control-label" for="addAgree2"> Disagree </label>
                                </div>



                            </span>



                        </form>
                    </div>

                </div> --}}
            </div>
        </div>
        {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> --}}
    </div>




@endsection
