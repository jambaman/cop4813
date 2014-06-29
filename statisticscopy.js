
/// JavaScript Document
function calc() {
        var numbers = getList(); // array will hold output of getNums func
        var total = findN(nums);
        var mean = findMean(nums, total);
    var median = findMedian(nums);
    var mode = findMode(nums);
    var variance = findVariance(nums, mean);
    var std = findStandardDeviation(variance);
    
    document.getElementById("mean").value = mean.toFixed(2);
    document.getElementById("median").value = median.toFixed(2);
    document.getElementById("mode").value = mode;
    document.getElementById("variance").value = variance.toFixed(2);
    document.getElementById("std").value = std.toFixed(2);
}
// reads input and parses into ordered array to return
function getNums() {
    var text = document.getElementById("list").value;
    //Trim the last characters until a number is reached (or null)
    while (isNaN(text[text.length -1]))
        text = text.substring(0, text.length - 1);
        
    mySplit(text); // split using custom function
    var prepNums = text.split(",");
    var nums = [];
    for (i = 0; i < findN(prepNums); i++)
        if (!isNaN(prepNums[i]))
            nums.push(parseFloat(prepNums[i], 10));
    nums.sort(function(a,b){return a-b;});
    return nums;
}
// Replaces ' ' and ', ' with ',' for easy splitting
function mySplit(textToSplit) {
        while (textToSplit.indexOf(", ") !== -1)
                textToSplit = textToSplit.replace(", ", ",");
        while (textToSplit.indexOf(" ") !== -1)
                textToSplit = textToSplit.replace(" ", ",");
}
// returns the length of the array (required)
function findN(array) {
    return array.length;
}
// return the mean (required) uses findSum func
function findMean(array, length) {
    return findSum(array) / length;
}
// adds all elements of the array (required)
function findSum(array) {
    var out = 0;
    for (i = 0; i < findN(array); i++)
        out += array[i];
    return out;
}
// returns the median of array (required)
function findMedian(array) {
        //gets quotient of the array length divided by 2
    var i = Math.floor(findN(array) / 2);
    // initializes return var with element in the middle
    // assuming the length is odd
    var out = array[i];
    // if the remainder of the length divided by 2 is 0
        // then it is an even length
        if (findN(array) % 2 === 0)
                // divides the sum of the two middle terms by 2
        out = (array[i] + array[i - 1]) / 2;
    return out;
}
//returns the mode of the array; if no mode, returns last element
function findMode(array) {
        // create copy of input array to not modify original array
    var copy = [];
    for (i = 0; i < findN(array); i++)
        copy[i] = array[i];
    
    var mode; // temp mode variable
    var occ; // number of occurenes
    //start at the back of the copy array
    for (i = findN(copy) - 1; i >= 0; i--) {
        occ = 0; // set occurences to 0
        //start at front of copy and loop through
        for (var j = 0; j < findN(copy); j++)
                //if the elements match, increment occurences
                //all elements will match at least once
            if (copy[i] === copy[j])
                occ++;
        //add occurences beginning of value. example:
        //if 5 occurred twice, value where 5 was stored becomes
        // '2:5' Now I can sort by whichever occured most
        copy[i] = occ + ":" + copy[i];
    }
    // sort by number of occurences
    copy.sort();
    //mode becomes first sorted element
    mode = copy[findN(copy) - 1];
    //split sorted element, ex: 2:5 would become an array ['2', '5']
    mode = mode.split(":");
    //return the second element of mode, ex '5'
    return mode[1];
}
//returns variance (required)
function findVariance(array, mean) {
        //create temp array
    var varArray = [];
    //loop through array, push the value of: the element minus the mean
    //of the elements, then squared.
    for (i = 0; i < findN(array); i++)
        varArray.push(Math.pow(array[i] - mean, 2));
        //returns the mean of the varArray
    return findMean(varArray, findN(varArray) - 1);
}
//Standard Deviation is the variance squared
function findStandardDeviation(variance) {
    return Math.sqrt(variance);
}
