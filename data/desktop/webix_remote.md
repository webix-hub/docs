Webix Remote
==============

Webix Remote is a special protocol that allows the client component to call procedures on the server directly, without sending any additional settings.

Thus, Webix Remote provides a more simple communication with the server in comparison with REST API. 

###REST API drawbacks

A usual request to the server via REST API implies forming a corresponding URL. Each request requires a new URL sending. Besides, requests are sent and 
processed one by one thus making a queue, which slows down the whole process of exchanging data.

###What offers Webix Remote

Webix Remote presents a perfect solution for this issue.  
While sending data it drops the stage with URLs formation and sends a request directly to the server. General advantages of this protocol are enumerated below:

- All necessary parameters are sent in one request. It considerably enhances the speed of operations.
- CSRF-security. User's data is protected and kept safe.
