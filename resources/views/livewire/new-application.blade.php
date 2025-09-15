  <div style="padding:90px 20px" class="container">


      <div class="inner">
          <div class="sec-title">
              <h2>{{$vacancy->title}}<span class="dot">.</span></h2>
              <div class="body">
                  {!! $vacancy->body !!}
              </div>
          </div>

      </div>

      <form wire:submit.prevent="submit" id="contact-form">

          <div class="form-box">
              <div class="sec-title">
                  <h2 style="font-size: 40px;">Personal Information<span class="dot">.</span></h2>
              </div>

              <div class="default-form">
                  <div class="row clearfix">
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                          <label for="">First Name</label>
                          <div class="field-inner">
                              <input type="text" wire:model="first_name" value="" placeholder="" required>
                              @error('first_name') <span class="error">{{ $message }}</span> @enderror
                          </div>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                          <div class="field-inner">
                              <label for="">Last Name</label>
                              <input type="text" wire:model="last_name" value="" placeholder="" required>
                              @error('last_name') <span class="error">{{ $message }}</span> @enderror
                          </div>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                          <div class="field-inner">
                              <label for="">Email Address</label>
                              <input type="email" wire:model="email" value="" placeholder="" required>
                              @error('email') <span class="error">{{ $message }}</span> @enderror
                          </div>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                          <div class="field-inner">
                              <label for="">Date of Birth</label>
                              <input type="date" wire:model="date_of_birth" value="" placeholder="" required="">
                              @error('date_of_birth') <span class="error">{{ $message }}</span> @enderror

                          </div>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                          <div class="field-inner">
                              <label for="gender">Gender</label>
                              <select wire:model="gender" id="gender" required>
                                  <option value="" >Select a gender</option>
                                  <option value="MALE" >Male</option>
                                  <option value="FEMALE">Female</option>
                              </select>
                              @error('gender') <span class="error">{{ $message }}</span> @enderror

                          </div>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                          <div class="field-inner">
                              <label for="">Phone Number (Whatsapp)</label>
                              <input type="text" wire:model="phone_number" value="" placeholder="" required="">
                              @error('phone_number') <span class="error">{{ $message }}</span> @enderror
                          </div>
                      </div>
                      <div class="form-group col-lg-12 col-md-12 col-sm-12">
                          <div class="field-inner">
                              <label for="">Education Qualifications</label>
                              <textarea wire:model="qualifications" placeholder="" required></textarea>
                              @error('qualifications') <span class="error">{{ $message }}</span> @enderror
                          </div>
                      </div>
                  </div>

              </div>
          </div>



          <div class="form-box">
              <div class="sec-title">
                  <h2 style="font-size: 40px;">Please answer the following<span class="dot">.</span></h2>
              </div>


              <div class="default-form">
                  <div class="row">


                      @foreach($fields as $key => $value)
                      <div class="form-group ">


                          <label for="field.{{$key}}">{{$key + 1}}. {{ is_object($value) ? $value->label : $value["label"]  }}</label>
                          @if (is_object($value) ? $value->type == "text" : $value["type"] == "text")
                          <textarea wire:model="fields.{{$key}}.value" id="field.{{$key}}" cols="30" rows="8" class="" ></textarea>
                          @else
                          <input type="file" wire:model="fields.{{$key}}.value" value="" placeholder="" required>
                          @endif
                      </div>
                      @endforeach
                  </div>
              </div>
          </div>



          <div class="form-group col-lg-12 col-md-12 col-sm-12">
              <button type="submit" class="theme-btn btn-style-one">
                  <i class="btn-curve"></i>
                  <span class="btn-title">Apply</span>
              </button>
          </div>

      </form>

  </div>