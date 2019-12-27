from django.db import models
import sys

class Driver(models.Model):
    
    class Meta:
        app_label = "main"

    nome = models.CharField(max_length=255, primary_key=True)

    object = models.Manager()

class DriverFactory:

    @staticmethod
    def fabricarDriver(impressora):
        raise NotImplementedError("Not supported yet.");
