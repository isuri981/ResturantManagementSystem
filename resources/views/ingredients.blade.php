<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Creator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .base-selection {
            margin-bottom: 20px;
        }

        .base-selection select {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .dish-container {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 20px auto;
            background-color: #f0f0f0;
            border-radius: 10px;
            overflow: hidden;
        }

        .dish-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .ingredient-img {
            display: none;
            position: absolute;
            width: 20%;
            height: auto;
        }

        .ingredients-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }

        .ingredient-option {
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
            transition: transform 0.2s ease;
            padding: 10px;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .ingredient-option:hover {
            transform: scale(1.1);
            background-color: #eaeaea;
        }

        .ingredient-option img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-bottom: 5px;
        }

        .ingredient-option.selected {
            border: 2px solid #4caf50;
            position: relative;
        }

        .ingredient-option.selected:after {
            content: '✓';
            color: #4caf50;
            font-size: 24px;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .selected-ingredients {
            margin-top: 20px;
            text-align: left;
        }

        .selected-ingredients ul {
            list-style-type: none;
            padding: 0;
        }

        .selected-ingredients ul li {
            margin-bottom: 5px;
            font-size: 16px;
            color: #555;
        }

        .submit-btn {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }

        .confirmation {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Create Your Dish</h1>
        <div class="base-selection">
            <label for="base">Choose Your Base:</label>
            <select id="base">
                <option value="pizza">Pizza Dough</option>
                <option value="noodles">Noodles</option>
                <option value="buriyani_rice">Buriyani Rice</option>
                <option value="salad">Salad Greens</option>
            </select>
        </div>
        <div class="dish-container" id="dishContainer">
            <img id="pizzaImage" src="orderimages/pizzabase.png" alt="Pizza Base">
            <img id="noodlesImage" src="orderimages/noodlesbase.png" alt="Noodles Base">
            <img id="buriyani_riceImage" src="orderimages/ricebase.png" alt="Buriyani Rice Base">
            <img id="saladImage" src="orderimages/saladbase.png" alt="Salad Greens Base">

            <img id="ingredientSauce" src="orderimages/sauce.png" alt="Sauce" class="ingredient-img">
            <img id="ingredientTomato" src="orderimages/tomato.png" alt="Tomato" class="ingredient-img">
            <img id="ingredientCheese" src="orderimages/cheese.png" alt="Cheese" class="ingredient-img">
            <img id="ingredientBellPepper" src="orderimages/bellpepper.png" alt="Bell Pepper" class="ingredient-img">
            
            <img id="ingredientGarlic" src="orderimages/garlic.png" alt="Garlic" class="ingredient-img">
            <img id="ingredientGreenChili" src="orderimages/greenchili.png" alt="Green Chili" class="ingredient-img">
            <img id="ingredientCarrots" src="orderimages/carrots.png" alt="Carrots" class="ingredient-img">
            <img id="ingredientCabbage" src="orderimages/cabbage.png" alt="Cabbage" class="ingredient-img">
            <img id="ingredientGreenBeans" src="orderimages/greenbeans.png" alt="Green Beans" class="ingredient-img">
            <img id="ingredientBlackPepper" src="orderimages/blackpepper.png" alt="Black Pepper" class="ingredient-img">
            <img id="ingredientEgg" src="orderimages/egg.png" alt="Egg" class="ingredient-img">
            <img id="ingredientChicken" src="orderimages/chicken.png" alt="Chicken" class="ingredient-img">
            <img id="ingredientOnion" src="orderimages/onion.png" alt="Onion" class="ingredient-img">
            <img id="ingredientLeaks" src="orderimages/leaks.png" alt="Leaks" class="ingredient-img">

            <!-- Placeholder for final dish image -->
            <img id="finalDishPizza" src="orderimages/finaldishpizza.png" alt="Final Dish - Pizza" class="ingredient-img" style="display: none;">
            <img id="finalDishNoodles" src="orderimages/finaldishnoodles.png" alt="Final Dish - Noodles" class="ingredient-img" style="display: none;">
            <img id="finalDishBuriyaniRice" src="orderimages/finaldishburiyani.png" alt="Final Dish - Buriyani Rice" class="ingredient-img" style="display: none;">


        </div>

        <div class="ingredients-grid">
            <div class="ingredient-option" data-ingredient="Tomato">
                <img src="orderimages/tomato.png" alt="Tomato">
                <p>Tomato</p>
            </div>
            <div class="ingredient-option" data-ingredient="Cheese">
                <img src="orderimages/cheese.png" alt="Cheese">
                <p>Cheese</p>
            </div>
            <div class="ingredient-option" data-ingredient="BellPepper">
                <img src="orderimages/bellpepper.png" alt="Bell Pepper">
                <p>Bell Pepper</p>
            </div>
            <div class="ingredient-option" data-ingredient="Sauce">
                <img src="orderimages/sauce.png" alt="Sauce">
                <p>Sauce</p>
            </div>
          
            <div class="ingredient-option" data-ingredient="Garlic">
                <img src="orderimages/garlic.png" alt="Garlic">
                <p>Garlic</p>
            </div>
            <div class="ingredient-option" data-ingredient="GreenChili">
                <img src="orderimages/greenchili.png" alt="Green Chili">
                <p>Green Chili</p>
            </div>
            <div class="ingredient-option" data-ingredient="Carrots">
                <img src="orderimages/carrots.png" alt="Carrots">
                <p>Carrots</p>
            </div>
            <div class="ingredient-option" data-ingredient="Cabbage">
                <img src="orderimages/cabbage.png" alt="Cabbage">
                <p>Cabbage</p>
            </div>
            <div class="ingredient-option" data-ingredient="GreenBeans">
                <img src="orderimages/greenbeans.png" alt="Green Beans">
                <p>Green Beans</p>
            </div>
            <div class="ingredient-option" data-ingredient="BlackPepper">
                <img src="orderimages/blackpepper.png" alt="Black Pepper">
                <p>Black Pepper</p>
            </div>
            <div class="ingredient-option" data-ingredient="Egg">
                <img src="orderimages/egg.png" alt="Egg">
                <p>Egg</p>
            </div>
            <div class="ingredient-option" data-ingredient="Chicken">
                <img src="orderimages/chicken.png" alt="Chicken">
                <p>Chicken</p>
            </div>
            <div class="ingredient-option" data-ingredient="Onion">
                <img src="orderimages/onion.png" alt="Onion">
                <p>Onion</p>
            </div>
            <div class="ingredient-option" data-ingredient="Leaks">
                <img src="orderimages/leaks.png" alt="Leaks">
                <p>Leaks</p>
            </div>
        </div>

        <div class="selected-ingredients">
            <h2>Selected Ingredients:</h2>
            <ul id="selectedIngredientsList"></ul>
        </div>

        <button class="submit-btn" id="placeOrderBtn">Place Order</button>
        <div class="confirmation" id="confirmationDiv"></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const baseSelect = document.getElementById('base');
            const dishContainer = document.getElementById('dishContainer');
            const selectedIngredientsList = document.getElementById('selectedIngredientsList');
            const placeOrderBtn = document.getElementById('placeOrderBtn');
            const confirmationDiv = document.getElementById('confirmationDiv');
            const finalDishImage = document.getElementById('finalDishImage');

            const ingredientImages = {
                Tomato: "ingredientTomato",
                Cheese: "ingredientCheese",
                BellPepper: "ingredientBellPepper",
                Sauce: "ingredientSauce",
                Egg: "ingredientEgg",
                Garlic: "ingredientGarlic",
                GreenChili: "ingredientGreenChili",
                Carrots: "ingredientCarrots",
                Cabbage: "ingredientCabbage",
                GreenBeans: "ingredientGreenBeans",
                BlackPepper: "ingredientBlackPepper",
                Chicken: "ingredientChicken",
                Onion: "ingredientOnion",
                Leaks: "ingredientLeaks"
            };

            baseSelect.addEventListener('change', function() {
                const baseValue = baseSelect.value;

                document.querySelectorAll('.dish-container img').forEach(img => {
                    img.style.display = 'none';
                });

                document.getElementById(baseValue + "Image").style.display = 'block';
            });

            let selectedIngredients = [];

            document.querySelectorAll('.ingredient-option').forEach(option => {
                option.addEventListener('click', function() {
                    const ingredient = option.getAttribute('data-ingredient');
                    const ingredientIndex = selectedIngredients.indexOf(ingredient);

                    if (ingredientIndex > -1) {
                        selectedIngredients.splice(ingredientIndex, 1);
                        option.classList.remove('selected');
                        document.getElementById(ingredientImages[ingredient]).style.display = 'none';
                    } else {
                        selectedIngredients.push(ingredient);
                        option.classList.add('selected');
                        document.getElementById(ingredientImages[ingredient]).style.display = 'block';
                    }

                    renderSelectedIngredients();
                });
            });

            function renderSelectedIngredients() {
                selectedIngredientsList.innerHTML = '';
                selectedIngredients.forEach(ingredient => {
                    const li = document.createElement('li');
                    li.textContent = ingredient;
                    selectedIngredientsList.appendChild(li);
                });
            }

            function updateFinalDishImage() {
                const base = baseSelect.value;
                if (base && selectedIngredients.length > 0) {
                    const ingredientsList = selectedIngredients.join('_');
                    finalDishImage.src = `orderimages/${base}_${ingredientsList}.png`; // Adjust this line if needed
                    finalDishImage.style.display = 'block';
                } else {
                    finalDishImage.style.display = 'none';
                }
            }

            function updateFinalDishImage() {
                const base = baseSelect.value;
                const finalDishPizza = document.getElementById('finalDishPizza');
                const finalDishNoodles = document.getElementById('finalDishNoodles');
                const finalDishBuriyaniRice = document.getElementById('finalDishBuriyaniRice');

                // Hide all final dish images initially
                finalDishPizza.style.display = 'none';
                finalDishNoodles.style.display = 'none';
                finalDishBuriyaniRice.style.display = 'none';

                if (base && selectedIngredients.length > 0) {
                    if (base === 'pizza') {
                        finalDishPizza.style.display = 'block';
                    } else if (base === 'noodles') {
                        finalDishNoodles.style.display = 'block';
                    } else if (base === 'buriyani_rice') {
                        finalDishBuriyaniRice.style.display = 'block';
                    }
                }
            }



            function sendOrder(ingredients) {
                fetch('http://127.0.0.1:8000/api/place-order', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            ingredients
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        confirmationDiv.textContent += ' Your order has been placed!';
                    })
                    .catch(error => {
                        confirmationDiv.textContent += ' There was an error placing your order.';
                    });
            }

            placeOrderBtn.addEventListener('click', function() {
                const selectedBase = baseSelect.value;

                if (selectedBase && selectedIngredients.length > 0) {
                    const orderDetails = `Order placed successfully! Base: ${selectedBase}, Ingredients: ${selectedIngredients.join(', ')}`;
                    confirmationDiv.textContent = orderDetails;
                    confirmationDiv.style.color = 'green';

                    // Update and display final dish image
                    updateFinalDishImage();

                    // Send the order to the backend
                    sendOrder(selectedIngredients);
                } else {
                    confirmationDiv.textContent = `Please select a base and at least one ingredient.`;
                    confirmationDiv.style.color = 'red';
                }
            });

            baseSelect.dispatchEvent(new Event('change'));
        });
    </script>
</body>

</html>