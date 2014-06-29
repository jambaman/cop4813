function isNumber(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

function getNumbers(str) {
  str = str.replace(" ", "");
  var pieces = str.split(",");
  var nums = [];

  for(i = 0; i < pieces.length; i++) {
    if(isNumber(pieces[i])) {
      nums.push(pieces[i]/1);
    }
  }

  nums.sort();
  return nums;
}

function getCount(nums) {
  return nums.length;
}

function getSum(nums) {
  var sum = 0;
  for(i = 0; i < nums.length; i++) {
    sum += nums[i];
  }
  return sum;
}

function getMean(nums) {
  return getSum(nums) / getCount(nums);
}

function getMode(nums) {
  var num = undefined;
  var count = 0;

  var cnum = 0;
  var counter = 0;

  for(i = 0; i < nums.length; i++) {
    if(cnum == nums[i]) {
      counter++;

      if(counter > count) {
        num = cnum;
        count = counter;
      }
    }
    else {
      cnum = nums[i];
      counter = 1;
      if(count == 0) {
        count = 1;
      }
    }
  }

  return num;
}

function getMedian(nums) {
  var i = Math.floor(nums.length/2);

  var med = nums[i];
  if(nums.length % 2 == 0) {
    med = (nums[i] + nums[i-1]) / 2;
  }

  return med;
}

function getVariance(nums) {
  var mean = getMean(nums);
  var diffs = [];

  for(i = 0; i < nums.length; i++) {
    diffs.push((nums[i] - mean)*(nums[i] - mean));
  }

  return getSum(diffs) / (getCount(diffs) - 1);
}

function getStandardDeviation(nums) {
  var variance = getVariance(nums);
  return Math.sqrt(variance);
}