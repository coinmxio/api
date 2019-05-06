APIKEY=Your api key here
METHOD=mix

curl -X POST \
-H "Content-Type: application/json" \
-H "Authorization-Bearer: $APIKEY" \
-d '{"fee": "5.0"}' \
-d '{"coin": "BTC"}' \
-d '{"mix": "["address", "100", "0"}' \
https://coinmx.io/api/v2/$METHOD