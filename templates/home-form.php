
    <script src="scripts/double-range-slider.js" defer></script>
    <div id="outer-form">
        <form id="search_form" action="">
                <input type="text" name="" id="city" placeholder="Where do you wanna go?" class="input" />
                <input type="date" name="" id="date-in"  class="input"/>
                <input type="date" name="" id="date-out" class="input"/>
                <input type="number" name="" min="1" max="20" id="n-guests" placeholder="What is the number of guests?" class="input"/>

            <label for="price-range" id="price-range">
                <div id="range-slider">
                    <input type="range" name="" value="0" id="min-price" min="0" max="100" />
                    <input type="range" name="" value="200" id="max-price" min="100" max="200" />
                </div>    
                <span id="range-values"></span>
            </label>
                <input id="search_button" type="submit" value="Search" class="submit_button"/>
        </form>
    </div>