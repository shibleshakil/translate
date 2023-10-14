
function deleteEfile(ab) {
    $(ab).closest('.layout__row').remove();
    updateQuotation();
}

function updateContextValue() {
    from_lang = $("#from").val();
    to_lang = $("#to").val();
    selected_subject = $("#subject").val();
    total_word = updateWordCountField();
    total_price = parseFloat(per_word * total_word).toFixed(2);

    estimate_date = updateEstimateDate();
}

function updateQuotation() {
    updateContextValue();
    $("#from_lang").text(from_lang);
    $("#to_lang").text(to_lang);
    $("#selected_subject").text(selected_subject);
    $("#total_word").text(total_word + ' words');
    $("#total_price").text('$' +total_price);
    $("#estimate_date").text(estimate_date);
}

function updateEstimateDate(){
    let user_deli_date = $("#delivery_date").val();
    let userChoice = false;
    if (user_deli_date) {
        userChoice = true;
        return formatDateWithWordCount(user_deli_date, total_word, userChoice);
    }else{
        return formatDateWithWordCount(currentDate, total_word, userChoice);
    }
}

function formatDateWithWordCount(inputDate, wordCount, userChoice) {
    // Create a Date object from the input date string
    const date = new Date(inputDate);

    // Define the number of words per day
    const wordsPerDay = 2000;

    // Calculate the number of days to add based on word count
    const daysToAdd = Math.ceil(wordCount / wordsPerDay);
    if (userChoice) {
        date.setDate(date.getDate());
    }else{
        date.setDate(date.getDate() + daysToAdd);
    }
    // Add the calculated days to the date

    // Define arrays for day names and month names
    const dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    // Get the day of the week, month, and day from the Date object
    const dayOfWeek = dayNames[date.getUTCDay()];
    const month = monthNames[date.getUTCMonth()];
    const day = date.getUTCDate();

    // Construct the formatted date string
    const formattedDate = `${dayOfWeek}, ${month} ${day.toString().padStart(2, '0')}`;

    return formattedDate;
}

function updateWordCountField() {
    let sum = 0;
    const fileWordsInputs = $('input[name="file_words[]"]');

    if (fileWordsInputs.length > 0) {
        fileWordsInputs.each(function() {
            const value = parseInt($(this).val().replace("'", ""));
            sum += value;
        });
    } else {
        // Use the value from the input field with the id "word_count"
        const wordCountInput = $("#word_count");
        if (wordCountInput.length > 0) {
            const value = parseInt(wordCountInput.val());
            if (!isNaN(value)) {
                sum += value;
            }
        }
    }

    $("#word_count").val(sum)

    return sum;
}

function getRandomString(length) {
    const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    let randomString = "";

    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * charset.length);
        randomString += charset.charAt(randomIndex);
    }

    return randomString;
}
