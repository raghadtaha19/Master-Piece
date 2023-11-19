<!-- Search Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
    <div class="container">
        <form action="{{ route('filterlands') }}" method="POST"> 
           @csrf 
            <div class="row g-2">
                <div class="col-md-10">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <select class="form-select border-0 py-3" name="area">
                                <option selected value="0-0">Area</option>
                                <option value="500-2000">500-2000 m2</option>
                                <option value="2001-4000">2001-4000 m2</option>
                                <option value="4001-6000">4001-6000 m2</option>
                                <option value="6001-8000">6001-8000 m2</option>
                                <option value="8001-10000">8001-10000 m2</option>
                                <option value="10001-12000">10001-12000 m2</option>
                                <option value="12001-14000">12001-14000 m2</option>
                            </select>
                        </div>
                        
                      
                        <div class="col-md-4">
                            <select class="form-select border-0 py-3" name="governorate">
                                <option selected value="">Governorate</option>
                                <option value="Amman">Amman</option>
                                <option value="Irbid">Irbid</option>
                                <option value="Zarqa">Zarqa</option>
                               
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-dark border-0 w-100 py-3">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Search End -->
