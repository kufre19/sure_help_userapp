@extends('layouts.web.app')

@section('main-content')
    <div id="contact" class="section">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <i class="fa fa-phone"></i>
                        <h4>Phone</h4>
                        <p>1-800-555-1234</p>
                    </div>
                    <div class="contact-info">
                        <i class="fa fa-envelope"></i>
                        <h4>Email</h4>
                        <p>info@example.com</p>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Address</h4>
                        <p>123 Main St, Anytown USA</p>
                    </div>
                </div>
                <div class="col-md-6 border">
                    <form>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                          </div>
                        </div>
                        <fieldset class="form-group">
                          <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                            <div class="col-sm-10">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                  First radio
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                  Second radio
                                </label>
                              </div>
                              <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                <label class="form-check-label" for="gridRadios3">
                                  Third disabled radio
                                </label>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        <div class="form-group row">
                          <div class="col-sm-2">Checkbox</div>
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck1">
                              <label class="form-check-label" for="gridCheck1">
                                Example checkbox
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection
