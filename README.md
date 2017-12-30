# Yii2 asset bundle for library web3.js v0.20.2

This package provide AssetBundle for web3js library

To install Yii2 Web3js Asset run:

```
composer require dmstr/yii2-adminlte-asset "0.20.2"
```

## For adding web3.js on your page just add line:
```
    biozahard\web3js\Web3jsAssets::register($this);
```

## Usage of web3.js
Use the `web3` object directly from global namespace:

```js
console.log(web3); // {eth: .., shh: ...} // it's here!
```

Set a provider (HttpProvider)

```js
if (typeof web3 !== 'undefined') {
  web3 = new Web3(web3.currentProvider);
} else {
  // set the provider you want from Web3.providers
  web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
}
```

Set a provider (HttpProvider using [HTTP Basic Authentication](https://en.wikipedia.org/wiki/Basic_access_authentication))

```js
web3.setProvider(new web3.providers.HttpProvider('http://host.url', 0, BasicAuthUsername, BasicAuthPassword));
```

There you go, now you can use it:

```js
var coinbase = web3.eth.coinbase;
var balance = web3.eth.getBalance(coinbase);
```

You can find more examples in [`example`](https://github.com/ethereum/web3.js/tree/master/example) directory.

## Caution!
Web3.js library in development, a lot of bugs and unpredictable behaviors expects you =)