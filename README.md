[![Latest Stable Version](https://poser.pugx.org/aubruz/mainframe-bot-api/v/stable)](https://packagist.org/packages/aubruz/mainframe-bot-api)
[![Total Downloads](https://poser.pugx.org/aubruz/mainframe-bot-api/downloads)](https://packagist.org/packages/aubruz/mainframe-bot-api)
[![Latest Unstable Version](https://poser.pugx.org/aubruz/mainframe-bot-api/v/unstable)](https://packagist.org/packages/aubruz/mainframe-bot-api)
[![License](https://poser.pugx.org/aubruz/mainframe-bot-api/license)](https://packagist.org/packages/aubruz/mainframe-bot-api)

# mainframe-bot-api
A package to use the mainframe bot api easily
You can find the documentation of the mainframe API [here](http://developer.mainframe.com/?http#mainframe-server-api).

## How to install it
With composer:
`composer require aubruz/mainframe-bot-api`

## How to use it
### Create client
``` 
$mainframeClient = new MainframeClient($botSecret);
```
You can specify the API url if you want to use another one. The default one is "https://api.mainframe.com/bots/v1/".
```
$mainframeClient = new MainframeClient($botSecret, 'https://api-staging.mainframe.com/bots/v1/');
``` 

### Send message
```
$mainframeClient->sendMessage($conversationID, 'Hello World!!');
```

### Setup subscription
```
$mainframeClient->setupSubscription($subscriptionToken, $label);
```

### Edit subscription
``` 
$mainframeClient->editSubscription($subscriptionToken, $label);
```

### Delete subscription
``` 
$mainframeClient->deleteSubscription($conversationID, $subscriptionID);
```
You can add an optional message to post to the conversation (to explain the reason for removal)
``` 
$mainframeClient->deleteSubscription($conversationID, $subscriptionID, $message);
```

## Response
The mainframe-bot-api package uses guzzlehttp/guzzle to perform the requests.
Each call returns a response object from that library. You can find the documentation [here](http://docs.guzzlephp.org/en/stable/quickstart.html#using-responses).
```
$response = mainframeClient->setupSubscription($subscriptionToken, $label);
$response = json_decode($response->getBody());
if($response->getStatusCode() === 200 && $response->success){
    // Do something
}
```