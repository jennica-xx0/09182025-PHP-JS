const standardShippingCost =6;
const discountedShippingCost = 4;

let totalPrice;
function calculateShippingCost(totalPriceParam){   
  let shippingCost;

  if (totalPriceParam <= 10) {
    shippingCost = standardShippingCost
  } else if (totalPriceParam <= 20) {
    shippingCost = standardShippingCost
  }else {
    shippingCost = 0;
  }

  console.log(`shipping cost for you is ${shippingCost}`);
  console.log(`for total price of ${totalPriceParam}`)
  console.log(`----------------------------`)
}
totalPrice = 21
calculateShippingCost(totalPrice)

totalPrice = 10
calculateShippingCost(totalPrice)