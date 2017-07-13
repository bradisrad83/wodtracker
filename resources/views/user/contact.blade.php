@extends('layouts.app')

@section('content')

<div class="container">
  <div class = "row">
    <div class = "col-sm-6">
      <h2>Contact Webmaster</h2>
        <p>Do you have any comments/concerns/suggestions?  Please feel free to fill out
           the following form and let me know what I can do to help.  Please keep in mind
           is a free application brough to you buy a coding bootcamp student.  I will do
           my best to keep up with and try to make everyone happy.  I kindly thank you for
           using my web app and hope you have a wonderful day.
        </p>
          <div id="contact-form" align="center">
              <form method="POST" action="https://formspree.io/brad.m.goldsmith@gmail.com">
                <input type="hidden"
                       name="_subject"
                       value="Contact request from DailyWodTracker" />
                <input type="email"
                       name="_replyto"
                       class="form-control"
                       value="{{$user->email}}">
                <br>
                <textarea name="message"
                          placeholder="Your message"
                          class="form-control"
                          rows="5"
                          required></textarea>
                <br>
                <button class="btn btn-primary navbar-inverse" type="submit">Send</button>
              </form>
          </div>
    </div>
  </div>
</div>
@stop
