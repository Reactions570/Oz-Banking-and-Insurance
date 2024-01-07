/////////////// Calculator

var calForm = document.getElementById("calForm");

//Calculate on submit
calForm.addEventListener("submit", e => {
	e.preventDefault();

	/////Elements
	//About you
	var numDep = document.getElementById("numDependants").value;
	var frequency = document.getElementById("frequency").value;
	//Deposit Amount
	var depCom = document.getElementById("depCom").value;
	var depApp1 = document.getElementById("depApp1").value;
	var depApp2 = document.getElementById("depApp2").value;
	var depApp3 = document.getElementById("depApp3").value;
	var depComValue = parseInt(depCom);
	var depApp1Value = parseInt(depApp1);
	var depApp2Value = parseInt(depApp2);
	var depApp3Value = parseInt(depApp3);
	//Income Amount
	var incCom = document.getElementById("incCom").value;
	var incApp1 = document.getElementById("incApp1").value;
	var incApp2 = document.getElementById("incApp2").value;
	var incApp3 = document.getElementById("incApp3").value;
	var incComValue = parseInt(incCom);
	var incApp1Value = parseInt(incApp1);
	var incApp2Value = parseInt(incApp2);
	var incApp3Value = parseInt(incApp3);
	//Purpose of loan
	var invest = document.getElementById("investment").checked;
	//Estimated House Price
	var housePrice = document.getElementById("propertyPrice").value;
	var housePriceValue = parseInt(housePrice);

	/////Results Area
	var estPrice = document.getElementById("estPrice");
	var estLoan = document.getElementById("estLoan");
	var estDeposit = document.getElementById("estDeposit");
	var estRepayment = document.getElementById("estRepayment");
	var frequencyName = document.getElementById("frequencyName");

	////Calculations
	//Interest rate
	const intRate = 6.34;
	//Length of Loan - 52 weeks by 15 years
	const calTerm = 780;

	//Income with adjusted cost of living - Checking for dependants and house purpose
	if (numDep == "1") {
		if (invest == true) {
			var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 2;
		} else {
			var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 1.8;
		}
	} else if (numDep == "2") {
		if (invest == true) {
			var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 2.2;
		} else {
			var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 2.0;
		}
	} else if (numDep == "3") {
		if (invest == true) {
			var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 2.4;
		} else {
			var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 2.2;
		}
	} else if (numDep == "4") {
		if (invest == true) {
			var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 2.6;
		} else {
			var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 2.4;
		}
	} else if (numDep == "5") {
		if (invest == true) {
			var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 2.8;
		} else {
			var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 2.6;
		}
	} else if (numDep == "6") {
		if (invest == true) {
			var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 3;
		} else {
			var income = (incComValue + incApp1Value + incApp2Value + incApp3Value) / 2.8;
		}
	}

	//Total deposit
	var deposit = depComValue + depApp1Value + depApp2Value + depApp3Value;
	//Initial borrow price is determined on deposit, income and term length
	var borrowPrice = deposit + income * calTerm;
	//Borrow price is divided by interest rate
	var intAmount = borrowPrice / intRate;
	//Borrow price is adjusted for interest due on loan
	var borrowPriceAdj = borrowPrice - intAmount;
	var borrowPriceRound = Math.round(borrowPriceAdj);

	//Checking if income is entered before showing results
	if (income == 0) {
		estRepayment.textContent = "-";
	} else {
		//Checking if house price is specified
		if (housePriceValue !== 0) {
			if (frequency == "1") {
				frequencyName.textContent = "Weekly Repayment";
				var repaymentPrice = housePriceValue / 780 - intRate / 4;
			} else if (frequency == "2") {
				frequencyName.textContent = "Fortnightly Repayment";
				var repaymentPrice = housePriceValue / 390 - intRate / 2;
			} else if (frequency == "3") {
				frequencyName.textContent = "Monthly Repayment";
				var repaymentPrice = housePriceValue / 180;
			}
			estPrice.textContent = "A house price is specified";
		} else {
			if (frequency == "1") {
				frequencyName.textContent = "Weekly Repayment";
				var repaymentPrice = borrowPrice / 780 - intRate / 4;
			} else if (frequency == "2") {
				frequencyName.textContent = "Fortnightly Repayment";
				var repaymentPrice = borrowPrice / 390 - intRate / 2;
			} else if (frequency == "3") {
				frequencyName.textContent = "Monthly Repayment";
				var repaymentPrice = borrowPrice / 180;
			}
			estPrice.textContent = "$" + borrowPriceRound;
		}

		//Rounding and displaying values
		var repaymentPriceRound = Math.round(repaymentPrice);

		estLoan.textContent = "$" + housePriceValue;
		estDeposit.textContent = "$" + deposit;
		estRepayment.textContent = "$" + repaymentPriceRound;
	}
});
