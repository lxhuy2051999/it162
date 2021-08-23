<section class="appointment full-screen flex-all-center" id="appointment">
    <form class="appointment-container flex-column-all-center md">
        <div class="notice">
            <p>skjdfhskjdhf</p>
        </div>
        <div class="steps">
            <div class="step-1 flex-column-all-center ">
                <div class="input flex-column-all-center">
                    <label for="number">Amount of people</label>
                    <select name="number" id="number">
                        <option value="1" default>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="input flex-column-all-center">
                    <label for="day">Choose a day</label>
                    <select name="day" id="day"></select>
                </div>
            </div>
            <div class="step-2 flex-column-all-center hide">
                <div class="left flex-column-all-center">
                    <div class="input flex-column-all-center">
                        <label for="type">Type</label>
                        <select name="type" id="type"></select>
                    </div>
                    <div class="input flex-column-all-center">
                        <label for="services">Service</label>
                        <select name="services" id="services"></select>
                    </div>
                    <div class="input flex-column-all-center">
                        <label for="amount">Amount</label>
                        <select name="amount" id="amount" placeholder="For # people"></select>
                    </div>
                </div>
                <div class="right flex-column-all-center">
                    <div class="item">
                        <p></p>
                        <div class="delete">X</div>
                    </div>
                </div>
            </div>
            <div class="step-3 flex-column-all-center hide">
                <h2>Please pick a specific time for your appointment</h2>
                <div class="input flex-column-all-center">
                    <label for=""> Time </label>
                    <div class="time">
                        <select name="hour" id="hour"></select>
                        <select name="minute" id="minute"></select>
                    </div>
                </div>
            </div>
            <div class="step-4 flex-column-all-center hide">

                <div class="top flex-column-all-center">
                    <div class="input flex-column-all-center">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="input flex-column-all-center">
                        <label for="phone-number">Phone number</label>
                        <input type="tel" name="phone-number" id="phone-number">
                    </div>
                    <div class="input flex-column-all-center">
                        <label for="">Email</label>
                        <input type="text" name="email" id="email">
                        <button type="submit" class="submit-btn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="appointment-navigation">
            <button class="prev">Back</button>
            <button class="next">Next</button>
        </div>
    </form>
</section>