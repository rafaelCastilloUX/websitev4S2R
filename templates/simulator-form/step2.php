<div class="preqForm text-center text-white step2" style="display: none;">
    <h5 class="fw-bold text-verde">2. Year Built</h5>
    <h4 class="fw-bold">When was your property built?</h4>
    <div class="my-1 px-5">
        <!-- <form id="form2"> -->
            <div class="row g-3">
                <div class="col-sm-6 p-0">
                    <div class="d-block p-1">
                        <input class="form-check-input d-none" type="radio" name="propertyBuilt" id="propertyBuilt-opcion1"
                            value="Before 1950">
                        <label class="form-check-label label-btn" for="propertyBuilt-opcion1">Before 1950</label>
                    </div>                   
                </div>
                <div class="col-sm-6 p-0">
                    <div class="d-block p-1">
                        <input class="form-check-input d-none" type="radio" name="propertyBuilt" id="propertyBuilt-opcion2"
                            value="After 1950">
                        <label class="form-check-label label-btn" for="propertyBuilt-opcion2">After 1950</label>
                    </div>                   
                </div>
            </div>

            <div class="row my-3">
                <div class="col-sm-12">
                <button onclick="btnBackClicked(event, 1)" class="btn btn-verde fw-bold">BACK <i
                            class="fa-solid fa-chevron-left "></i></button>
                    <button onclick="btnNextClicked(event, 2)" class="btn btn-verde fw-bold">NEXT <i
                            class="fa-solid fa-chevron-right "></i></button>
                </div>
            </div>
        <!-- </form> -->
    </div>
</div>