<div class="row">
    <!-- Patient Id Field -->
    <div class="form-group col-sm-6">
        {{ Form::label('patient_id', __('messages.patient_admission.patient').':') }}<span class="required">*</span>
        {{ Form::select('patient_id', $data['patients'], null, ['class' => 'form-control','id' => 'patientId', 'placeholder' => 'Select Patient','required',isset($patientAdmission->patient_admission_id) ? 'disabled' : '']) }}
        @if(isset($patientAdmission->patient_admission_id))
            {{Form::hidden('patient_id',$patientAdmission->patient_admission_id)}}
        @endif
    </div>

    <!-- Doctor Id Field -->
    @if(Auth::user()->hasRole('Doctor'))
        <input type="hidden" name="doctor_id" value="{{ Auth::user()->owner_id }}">
    @else
        <div class="form-group col-sm-6">
            {{ Form::label('doctor_id', __('messages.patient_admission.doctor').':') }}<span class="required">*</span>
            {{ Form::select('doctor_id',$data['doctors'], null, ['class' => 'form-control','id' => 'doctorId', 'placeholder' => 'Select Doctor','required']) }}
        </div>
@endif

<!-- Admission Date Field -->
    <div class="form-group col-sm-6">
        {{ Form::label('admission_date', __('messages.patient_admission.admission_date').':') }}<span
                class="required">*</span>
        {{ Form::text('admission_date', null, ['class' => 'form-control','id' => 'admissionDate','required','autocomplete' => 'off']) }}
    </div>

  <div class="form-group col-sm-6">
        {{ Form::label('present_illness', __('Present illness').':') }}
        {{ Form::text('present_illness', null, ['class' => 'form-control']) }}
    </div>

    {{--<div class="form-group col-sm-6">
        <p>Previous treatment taken:</p>
           @if ($patientAdmission->ayurveda== null)
           <div>
            <input value="yes" type="checkbox" id="ayurveda" name="ayurveda"
                   >
            <label for="ayurveda">Ayurveda</label>
          </div>

           @else
           <div>
            <input value="yes" checked type="checkbox" id="ayurveda" name="ayurveda"
                   >
            <label for="ayurveda">Ayurveda</label>
          </div>

           @endif

@if ($patientAdmission->allopathy==null)

<div>
    <input  value="yes" type="checkbox" id="allopathy" name="allopathy">
    <label for="allopathy">Allopathy</label>
  </div>

@else

<div>
    <input  value="yes" checked type="checkbox" id="allopathy" name="allopathy">
    <label for="allopathy">Allopathy</label>
  </div>

@endif

@if ($patientAdmission->homeopathy==null)
<div>
    <input value="yes" type="checkbox" id="homeopathy" name="homeopathy"
           >
    <label for="homeopathy">Homeopathy</label>
  </div>

@else
<div>
    <input value="yes" checked type="checkbox" id="homeopathy" name="homeopathy"
           >
    <label for="homeopathy">Homeopathy</label>
  </div>

@endif

@if ($patientAdmission->others==null)
<div>
    <input value="yes" type="checkbox" id="others" name="others"
           >
    <label for="others">Others</label>
  </div>
@else
<div>
    <input value="yes" checked type="checkbox" id="others" name="others"
           >
    <label for="others">Others</label>
  </div>
@endif




        </div>--}}


        <div  class="form-group col-sm-6">
            <label for="">Reference for Radiance</label>
                <select class="form-control" name="inquiry" id="">
                    @if ($patientAdmission->inquiry==null)
                    <option value="">Reference for radiance (Inquiry)</option>
                    <option value="News papers">News Papers</option>
                    <option value="Internet">Internet</option>
                    <option value="Friends/Relatives">Friends/Relatives</option>
                    <option value="Social media">Social media</option>
                    <option value="Others">Others</option>
                    @else
                    <option value="{{ $patientAdmission->inquiry }}">{{ $patientAdmission->inquiry }}</option>
                    <option value="News papers">News Papers</option>
                    <option value="Internet">Internet</option>
                    <option value="Friends/Relatives">Friends/Relatives</option>
                    <option value="Social media">Social media</option>
                    <option value="Others">Others</option>
                    @endif


                </select>

        </div>
        <div  class="form-group col-sm-6">
            <label for="">Previous Treatment</label>
            <select class="form-control" name="previous_treatment" id="">
                @if ($patientAdmission->previous_treatment==null)
                <option value="">Previous treatment</option>
                <option value="Ayurveda">Ayurveda</option>
                <option value="Allopathy">Allopathy</option>
                <option value="Homeopathy">Homeopathy</option>
                <option value="Others">Others</option>

                @else
                <option value="{{ $patientAdmission->previous_treatment }}">{{ $patientAdmission->previous_treatment }}</option>
                <option value="Ayurveda">Ayurveda</option>
                <option value="Allopathy">Allopathy</option>
                <option value="Homeopathy">Homeopathy</option>

                <option value="Others">Others</option>
                @endif


            </select>

    </div>


@isset($patientAdmission)
    <!-- Discharge Date Field -->
        <div class="form-group col-sm-6 date-container">
            {{ Form::label('discharge_date', __('messages.patient_admission.discharge_date').':') }}
            {{ Form::text('discharge_date', null, ['class' => 'form-control','id' => 'dischargeDate', 'autocomplete'=>'off']) }}
        </div>
@endisset

<!-- Package Id Field -->
    <div class="form-group col-sm-6">
        {{ Form::label('package_id', __('messages.patient_admission.package').':') }}
        {{ Form::select('package_id', $data['packages'], null, ['class' => 'form-control','id' => 'packageId', 'placeholder' => 'Select Package']) }}
    </div>

    <!-- Insurance Id Field -->
    <div class="form-group col-sm-6">
        {{ Form::label('insurance_id', __('messages.patient_admission.insurance').':') }}
        {{ Form::select('insurance_id', $data['insurances'], null, ['class' => 'form-control','id' => 'insuranceId', 'placeholder' => 'Select Insurance']) }}
    </div>

    <!-- Bed Id Field -->
    <div class="form-group col-sm-6">
        {{ Form::label('bed_id', __('messages.patient_admission.bed').':') }}
        {{ Form::select('bed_id', $data['beds'], null, ['class' => 'form-control','id' => 'bedId', 'placeholder' => 'Select Bed']) }}
    </div>

    <!-- Policy No Field -->
    <div class="form-group col-sm-6">
        {{ Form::label('policy_no', __('messages.patient_admission.policy_no').':') }}
        {{ Form::text('policy_no', null, ['class' => 'form-control']) }}
    </div>

    <!-- Agent Name Field -->
    <div class="form-group col-sm-6">
        {{ Form::label('agent_name', __('messages.patient_admission.agent_name').':') }}
        {{ Form::text('agent_name', null, ['class' => 'form-control']) }}
    </div>

    <!-- Guardian Name Field -->
    <div class="form-group col-sm-6">
        {{ Form::label('guardian_name', __('messages.patient_admission.guardian_name').':') }}
        {{ Form::text('guardian_name', null, ['class' => 'form-control']) }}
    </div>

    <!-- Guardian Relation Field -->
    <div class="form-group col-sm-6">
        {{ Form::label('guardian_relation', __('messages.patient_admission.guardian_relation').':') }}
        {{ Form::text('guardian_relation', null, ['class' => 'form-control']) }}
    </div>

    <!-- Guardian Contact Field -->
    <div class="form-group col-sm-6">
        {{ Form::label('guardian_contact', __('messages.patient_admission.guardian_contact').':') }}
        {{ Form::text('guardian_contact', null, ['class' => 'form-control', 'id' => 'phoneNumber', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")']) }}
        {{ Form::hidden('prefix_code', null, ['id' => 'prefix_code']) }}
        <span id="valid-msg" class="hide">✓ &nbsp; Valid</span>
        <span id="error-msg" class="hide"></span>
    </div>

    <!-- Guardian Address Field -->
    <div class="form-group col-sm-6">
        {{ Form::label('guardian_address', __('messages.patient_admission.guardian_address').':') }}
        {{ Form::text('guardian_address', null, ['class' => 'form-control']) }}
    </div>

    <!-- Status Field -->
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('status', __('messages.common.status').':') }}<br>
            <label class="switch switch-label switch-outline-primary-alt swich-center">
                <input name="status" class="switch-input is-active" type="checkbox"
                       value="1" {{(isset($patientAdmission) && ($patientAdmission->status)) ? 'checked' : ''}} {{ !isset($patientAdmission) ? 'checked' : '' }}>
                <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
            </label>
        </div>
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {{ Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary', 'id' => 'saveBtn']) }}
        <a href="{{ route('patient-admissions.index') }}"
           class="btn btn-secondary">{{ __('messages.common.cancel') }}</a>
    </div>
</div>
