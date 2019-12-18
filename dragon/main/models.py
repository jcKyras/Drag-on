from django.db import models

# Create your models here.
class Impressora(models.Model):

    nome = models.CharField(max_length=50)
    cont_impressoes = models.IntegerField()
    cont_max_impressoes = models.IntegerField(default=1000)
    numero_serie = models.CharField(max_length=255, primary_key=True)
    modelo = models.ForeignKey(
        'ModeloImpressora',
        on_delete=models.CASCADE,
    )
    online = models.BooleanField(default=False)
    operante = models.BooleanField(default=False)
    necessita_reparo = models.BooleanField(default=False)

    object = models.Manager()

class ModeloImpressora(models.Model):

    nome = models.CharField(max_length=255, primary_key=True)

    object = models.Manager()
