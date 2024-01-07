/////////////// Calculator

var calForm = document.getElementById("calForm");

//Calculate on submit
calForm.addEventListener("submit", e => {
	e.preventDefault();

	/////Elements
	//About you
	var numDep = document.getElementById("numDependants").value;
	var frequency = document.getElementById("frequency").value;
	//Income Amount
	var incCom = document.getElementById("incCom").value;
	var incApp1 = document.getElementById("incApp1").value;
	var incApp2 = document.getElementById("incApp2").value;
	var incApp3 = document.getElementById("incApp3").value;
	var incComValue = parseInt(incCom);
	var incApp1Value = parseInt(incApp1);
	var incApp2Value = parseInt(incApp2);
	var incApp3Value = parseInt(incApp3);
	/////Results Area
	var estPrice = document.getElementById("estPrice");
	var estRepayment = document.getElementById("estRepayment");
	var frequencyName = document.getElementById("frequencyName");

	////Calculations
	//Interest rate
	const intRate = 21.54;
	//Length of Loan - 52 weeks by 7 years
	const calTerm = 364;

	//Income with adjusted cost of living - Checking for dependants
	if (numDep == "1") {
		var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 2;
	} else if (numDep == "2") {
		var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 2.2;
	} else if (numDep == "3") {
		var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 2.4;
	} else if (numDep == "4") {
		var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 2.6;
	} else if (numDep == "5") {
		var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 2.8;
	} else if (numDep == "6") {
		var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 3;
	}

	//Initial borrow price is determined on income and term length
	var borrowPrice = income * calTerm;
	//Borrow price is divided by interest rate
	var intAmount = borrowPrice / intRate;
	//Borrow price is adjusted for interest due on loan
	var borrowPriceAdj = borrowPrice - intAmount;
	var borrowPriceRound = Math.round(borrowPriceAdj);

	//Checking if income is entered before showing results
	if (income == 0) {
		estRepayment.textContent = "-";
	} else {
		//Adjusting repayment frequency
		if (frequency == "1") {
			frequencyName.textContent = "Weekly Repayment";
			var repaymentPrice = borrowPriceRound / 780 - intRate / 4;
		} else if (frequency == "2") {
			frequencyName.textContent = "Fortnightly Repayment";
			var repaymentPrice = borrowPriceRound / 390 - intRate / 2;
		} else if (frequency == "3") {
			frequencyName.textContent = "Monthly Repayment";
			var repaymentPrice = borrowPriceRound / 180;
		}
	}

	//Rounding and displaying values
	var repaymentPriceRound = Math.round(repaymentPrice);

	estPrice.textContent = "$" + borrowPriceRound;
	estRepayment.textContent = "$" + repaymentPriceRound;
});
