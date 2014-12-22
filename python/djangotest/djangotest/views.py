#!/usr/bin/env python
#
# http://www.djangobook.com/en/2.0/chapter03.html
#


from django.http import HttpResponse

def hello(request):
    return HttpResponse("Hello world")
