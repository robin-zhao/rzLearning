from django.conf.urls import patterns, include, url

from django.contrib import admin
admin.autodiscover()

from djangotest.views import hello

urlpatterns = patterns('',
    # Examples:
    # url(r'^$', 'djangotest.views.home', name='home'),
    # url(r'^blog/', include('blog.urls')),

    url(r'^admin/', include(admin.site.urls)),

    # r means raw string.
    url(r'^hello/$', hello),
)
