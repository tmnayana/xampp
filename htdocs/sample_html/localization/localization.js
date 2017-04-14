// Methods to perform localization

var testMessage = "Test Message";
var myArray = [1, 2, 3, 4];

// Use ^ as delimiter between the strings
function translateConcatString(mainVar, stringsForConcat)
{
	var mainArr = mainVar.split("%s");
	var paramArr = stringsForConcat.split("^");
	var concatenatedString = "";

	if(mainArr.length < paramArr.length)
	{
		alert("Error: Error in message display" + mainVar);
		return null;
	}

	for (var intI=0; intI < mainArr.length; intI++)
	{
		concatenatedString += mainArr[intI];

		if(paramArr[intI])
		{
			concatenatedString += paramArr[intI];
		}
	}

	return concatenatedString;
}