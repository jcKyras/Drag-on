from django.db import models

# Create your models here.
class Impressora(models.Model):

    nome = models.CharField(max_length=50)
    cont_impressoes = models.IntegerField()
    numero_serie = models.CharField(max_length=255, primary_key=True)
    modelo = models.ForeignKey(
        'ModeloImpressora',
        on_delete=models.CASCADE,
    )
    online = models.BooleanField()

    object = models.Manager()

class ModeloImpressora(models.Model):

    nome = models.CharField(max_length=255, primary_key=True)

    object = models.Manager()
