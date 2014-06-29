
//Evaluate the data entered by the user is in a valid format
function verifyArray(strIn, nbrsIn){
	//loop thru the string
	for (var i in strIn){
		//place the items in the array
		//remove commas
		strIn = strIn.replace(/\,/g,"");	
		nbrsIn = strIn.split(" ");
	}
	alert(nbrsIn.length);
        nbrsIn.sort(function(a,b) {return a-b;});
	return nbrsIn;
}//end function 
//Find the number of values in a list of numbers
function findN(arrayIn){
	return arrayIn.length;
}//end of function findN
//Add up the elements in an array
function findSum(arrayIn){
	var sum = 0;
	for (var i in arrayIn){
			sum += parseFloat(arrayIn[i], 10);
	}//end for loop
	return sum
}//end function findSum
//Find the mean or average of the numbers`
function findMean(arrayIn){
	var mean = 0;
	mean = findSum(arrayIn)/findN(arrayIn);
	return mean;
}//end of function findMean
function findMedian(arrayIn){
        //sort the array
        arrayIn.sort(function(a,b) {return a-b;});
        //find the middle index
        //is it even or odd
        if((findN(arrayIn)%2) == 0){
                //find upper middle
                var umidd = Math.floor(arrayIn.length/2);
		//alert(umidd);	
                //find upper middle minus 1
                if(umidd > 1){
                        var lmidd = parseFloat(arrayIn[umidd - 1]);
                        umidd = parseFloat(arrayIn[umidd]);
			//divide the values at that index
                        var evenMed = ((lmidd + umidd)/2);
                        return evenMed;
                }
                //divide the values at that index
               	else{
                	return arrayIn[umidd];
                }
        }else{
                var midd = Math.floor(arrayIn.length/2);
                return arrayIn[midd];
        }//end if-else

}//end function findMedian
function findVariance(arrayIn){
	//get the mean
	var meanIn = 0;
	meanIn =  findMean(arrayIn);
	var tempArray = [];
	var tmp = 0;
	for (var i in arrayIn){
		//for each subtract the mean and then square it
		//compute the average of those squares
		tmp = parseFloat(arrayIn[i]);
		tmp -= meanIn;
		tmp *= tmp;
		tempArray[i] = tmp;
		//push onto array
	}//end for loop
	return findMean(tempArray);
}//end function findVariance
function findDeviation(arrayIn){
	//this is the square root of the variance
	return Math.sqrt(findVariance(arrayIn));
}//end function findVariance
function findMode(arrayIn){
	var modeArray = new Array();
	var cnt = 0;
	var ind = 0;
	var current = null;
	var lst = null;
	//build an array of arrays where the value is the first item and the count is the second.	
	for (var i in arrayIn){
		current = arrayIn[i];
		//if I already counted this one then do nothing but go to the next number in the arrayIn this assumes the array is sorted
		if (lst != current){
			//loop thru the array andd count the occurances of the number
			for (var s in arrayIn){
				if (current == arrayIn[s]){
					cnt++;
				}//end if
			}//end inner for loop for count
			//push the count array into the modeArray
			modeArray[ind] = new Array(2); //add a 2 item array into this array
			modeArray[ind][0] = current;//store the current value we counted
			modeArray[ind][1] = cnt; //store the count of that value
			ind++;//increment the indexer
			cnt = 0;//reset count
			lst = current; //set the detector...this only works if the arrayIn is sorted
		}//end if
	}//end first for loop
	//now find out if its; modal, mutli-modal, or non-modal
	var modal = false;
	var multimodal = false;
	cnt = 0;
	var mode = 0;
	var changes = 0;
	//test to see if its modal or not
	current = modeArray[0][1];
	for (var t in modeArray){
		//first see if there is a mode or not
		if ( current != modeArray[t][1]){
			//then there is  mode so do the other thing
			modal = true;
			if (current < modeArray[t][1]){
				mode = modeArray[t][1];
			}else{
				mode = current;
			}//end if-else
		}//end if
		current = modeArray[t][1];
	}//end for loop	
	//if it is modal build an array with the values that have the mode
	if(modal){
		var modeValues = new Array();
		for (var r in modeArray){
			if( mode == modeArray[r][1]){
				modeValues.push(modeArray[r][0]);
			}
		}//end for loop
		if (modeValues.length > 1){
			return"It is multimodal:" + modeValues;
		}else{
			return "It is single modal: " + modeValues;
		}
		//return the numbers and if it is multi modal or not
	}//end ifi
	else{
		return "There is no mode.";
	}
}//end function findMode