{{ Form::open(array('url'=>URL::route('send_message'), 'method'=>'POST', 'role'=>'form', 'data-id'=>'fotco_contact_us_form', 'id' => 'send_email_form')) }}
  <div class="form-group">
    <label for="email">Your email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="name">Your name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="message">Your message</label>
    <textarea class="form-control" rows="3" id="message" name="message" placeholder="Enter message"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Upload file</label>
    <input type="file" id="exampleInputFile" name="contactFile" class="form-control">
    <p class="help-block">Attach your file here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" name="send_copy_to_self"> Send a copy to myself
    </label>
  </div>
  <button type="submit" class="btn btn-green send-request">Send request</button>
{{ Form::close() }}

<!-- Form::open(array('url' => URL::route('send_message'),'method' => 'POST', 'role' => 'form', 'id' => 'send_email_form')) }}
  <div class="form-group">
    <label for="email">Your email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="name">Your name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="message">Your message</label>
    <textarea class="form-control" rows="3" name="message" placeholder="Enter message"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Upload file</label>
    <input type="file" id="exampleInputFile" name="contactFile" class="form-control">
    <p class="help-block">Attach your file here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" name="send_copy_to_self"> Send a copy to myself
    </label>
  </div>
{{ Form::close() -->