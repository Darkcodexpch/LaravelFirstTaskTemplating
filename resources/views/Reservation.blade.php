@extends('layout.master')
@section('content')
<section class="menu mt-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h4 class="intro text-center">Reservation</h4>
                <div class="ser text-center">
                    <h1>Our Contact</h1>
                    <img src="Images/heading-dark.png" alt="head">
                </div>
            </div>
</div>

</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                                              </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Phone</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Message</label>
                        <textarea cols="50" rows="2" class="form-control"></textarea>
                      </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>

        </div>

    </div>

</section>

    
@endsection