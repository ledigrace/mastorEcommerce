$category->status = $request->input('bestSeller') == TRUE ? '1':'0';
    $category->status = $request->input('featured') == TRUE ? '1':'0';


    <div class="col-md-6">
                    <label for="">Best Seller</label>
                    <input type="checkbox" name="checkbox" id="checkbox">
                </div>

                <div class="col-md-6">
                    <label for="">Featured</label>
                    <input type="checkbox" name="checkbox" id="checkbox">
                </div>