<!-- Search Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
    <div class="container">
        <form action="{{ route('filterlands') }}" method="GET"> 
           @csrf 
            <div class="row g-2">
                <div class="col-md-10">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <select class="form-select border-0 py-3" name="area">
                                <option selected>Area</option>
                                <option value="500-2000">500-2000</option>
                                <option value="2100-3500">2100-3500</option>
                                <option value="3600-5000">3600-5000</option>
                                <option value="5100-6500">5100-6500</option>
                                <option value="6600-8000">6600-8000</option>
                                <option value="8100-9500">8100-9500</option>
                                <option value="9600-11.000">9600-11.000</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select border-0 py-3" name="price">
                                <option selected>Price</option>
                                <option value="10.000-20.000">10.000-20.000</option>
                                <option value="21.000-30.000">21.000-30.000</option>
                                <option value="31.000-50.000">31.000-50.000</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select border-0 py-3" name="governorate">
                                <option selected>Governorate</option>
                                <option value="Amman">Amman</option>
                                <option value="Irbid">Irbid</option>
                                <option value="Zarqa">Zarqa</option>
                                <option value="Jerash">Jerash</option>
                                <option value="Madaba">Madaba</option>
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
