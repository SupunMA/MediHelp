<!-- Edit branch -->
<div class="modal fade" id="ClientEditModal-{{$client->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Update <b>{{$client->name}}</b> Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{route('admin.updateClient')}}" method="post">
                @csrf
                
                <div class="modal-body">
                   
                    <input type="hidden" name="id" value="{{$client->id}}">
                    
                    <div class="form-group">
                        <label >Name</label>
                        <input type="name" name="name" value="{{$client->name}}" class="form-control" id="name" placeholder="Enter Name">
                    </div>
        {{-- Gender and DOB --}}
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <label>Gender</label>
                                
                                <select class="form-control select2bs4" style="width: 100%;" name="gender">
                                    @if ($client->gender=="M")
                                    {
                                        <option value="M" selected="selected">Male</option>
                                        <option value="F">Female</option>
                                        <option value="O">Other</option>
                                    }
                                    @elseif ($client->gender=="F")
                                    {
                                        <option value="M">Male</option>
                                        <option value="F" selected="selected">Female</option>
                                        <option value="O">Other</option>
                                    }
                                    @elseif ($client->gender=="O")
                                    {
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        <option value="O" selected="selected">Other</option>
                                    }
                                   
                                    @endif 
                                    
                                    
                                </select>
                            </div>
                        </div>
        
                        
        
                        <!-- Date -->
                        <div class="form-group">
                            <label>Date of Birth</label>
        
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" data-inputmask-alias="datetime"
                                    name="dob" value="{{$client->dob}}" data-inputmask-inputformat="yyyy-mm-dd" data-mask>
                            </div>
                        
                        </div>
                    
        
                    </div>
        {{-- Address and zipcode --}}
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label >Address</label>
                                <textarea class="form-control" name="address" id="" cols="30" rows="4" 
                                    placeholder="Address">{{$client->address}}</textarea>
                            </div>
                        </div>
        
                        
        
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label >Zip Code</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control"
                                        data-inputmask="'mask': ['99999']" data-mask value="{{$client->zipCode}}"
                                        placeholder="Zip Code" name="zipCode">
                                    
                                </div>
                            </div>
                        </div>
        
                    </div>
        
        {{-- Mobile and Email --}}
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <label >Mobile</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" data-inputmask='"mask": "(999) 999 9999"' data-mask
                                    placeholder="Mobile Number" name="mobile" value="{{$client->mobile}}">
                            </div>
        
        
                        </div>
        
        
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label >Email Address</label>
                                <input type="email" class="form-control" name="email" value="{{$client->email}}" placeholder="Email Address">
                            </div>
                        </div>
        
        
                    </div>
        
                    
        {{-- Joining Date and Plan --}}
                    <div class="row">
                         <!-- Date  -->
                        <div class="col-6">
                            <div class="form-group">
                                <label>Joining Date</label>
            
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask-alias="datetime"
                                        name="joinDate" value="{{$client->joinDate}}" data-inputmask-inputformat="yyyy-mm-dd" data-mask>
                                </div>
                        
                            </div>
        
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label>Select The Plan</label>
                                
                                <select class="form-control select2bs4" style="width: 100%;" name="refPlan">
                                    {{-- <option selected="selected">Alabama</option> --}}
                                    @foreach ($plans as $bd)
                                        @if ($bd->planID == $client->refPlan)
                                            <option value="{{$bd->planID}}" selected="selected">{{$bd->planName}} - Rs.{{$bd->planPrice}}</option>
                                        @else
                                        {
                                            <option value="{{$bd->planID}}">{{$bd->planName}} - Rs.{{$bd->planPrice}}</option>
                                        }
                                        @endif
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>
        
                    </div>
        
        {{-- Role value --}}
                    <input name="role" type="hidden" value="0">
                    





                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>
