##Design Pattern

* Whats is?

>"Each pattern describes a problem which occurs over and over again in our environment, and then describes the core of the solution to that problem, in such a way that you can use this solution a million times over, without ever doing it the same way twice" - Christopher Alexander says

###[Strategy](#strategy)

>Define a family of algorithms, encapsulate each one, and make them
interchangeable. Strategy lets the algorithm vary independently from
clients that use it. - Gof


<a name="strategy">Strategy</a>

###When to use the Strategy?

* When you want to define a class that will have one behavior that is similar to other behaviors in a list:
    + Not flying
    + Flying fasts
    + Flying with rocket 

* When you need to use one of severel behaviors dynamically    

* Often reduces long lists of conditonals

* Avoid duplicate code

* Keeps class changes from forcing other class changes

* Can hide complicated 

###Problem?
* Increased number of Classes. 

UML for strategy sample pattern.

![PlantUML model](http://plantuml.com/plantuml/png/VP1DRi8m48NtFiKiGPLHrrOK2LeXiOOBECw0H_KFibqGXTwz8N6AqrRTpRptpSopunkvempIWZ8oncLAWPhtX1lbtPO-49vPRy3IaPK6hWo0GuDQdiY7jRc8rQFkl2T8uRBpNJERYsstp1rwDM8gm5bHpyN9Kyi-MJvKM51Lv1A6lLHOrzT-qRxS_9ZQf3l_1_9Dl4Zt3wEfHR1e6mmHXavHK0PPrFuylZu3WrO6jPYqRxCnP9b8u_5HP7bXTUCSLXHQ440Hv4H_zOSVCkVrvAm0BU_svCzkYqMEq0tReq6BBiNVp9YffBu0)