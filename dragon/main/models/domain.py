from django.db import models
from .driver import Driver, DriverFactory

# Create your models here.
class Impressora(models.Model):

    class Meta:
        app_label = "main"

    nome = models.CharField(max_length=50)
    cont_impressoes = models.IntegerField()
    cont_max_impressoes = models.IntegerField(default=1000)
    numero_serie = models.CharField(max_length=255, primary_key=True)
    ip = models.CharField(max_length=255, default="0.0.0.0")
    modelo = models.ForeignKey(
        'ModeloImpressora',
        on_delete=models.SET_NULL,
        null=True,
    )
    local = models.ForeignKey(
        'Local',
        on_delete=models.SET_NULL,
        null=True,
    )
    online = models.BooleanField(default=False)
    operante = models.BooleanField(default=False)
    necessita_reparo = models.BooleanField(default=False)

    objects = models.Manager()

    def obter_contador_remoto(self):
        driver = DriverFactory.fabricarDriver(self)
        return driver.obter_contador(self)


class Medicao(models.Model):

    class Meta:
        app_label = "main"

    data = models.DateField()
    contador = models.IntegerField()
    impressora = models.ForeignKey(
        'Impressora',
        on_delete=models.PROTECT,
    )

    objects = models.Manager()

class ModeloImpressora(models.Model):

    class Meta:
        app_label = "main"

    nome = models.CharField(max_length=255, primary_key=True)
    driver = models.ForeignKey(
        'Driver',
        on_delete=models.SET_NULL,
        null=True,
    )

    objects = models.Manager()

class Servidor(models.Model):
    
    class Meta:
        app_label = "main"

    matricula = models.CharField(max_length=255, primary_key=True)
    nome = models.CharField(max_length=255)
    grupo = models.ForeignKey(
        'Grupo',
        on_delete=models.SET_NULL,
        null=True,
    )

    objects = models.Manager()

class Local(models.Model):

    class Meta:
        app_label = "main"

    nome = models.CharField(max_length=255, primary_key=True)
    
    objects = models.Manager()

class Permissao(models.Model):

    class Meta:
        app_label = "main"

    numero = models.IntegerField(primary_key=True)
    nome = models.CharField(max_length=50)

    objects = models.Manager()

class Regra(models.Model):

    class Meta:
        app_label = "main"

    grupo = models.ForeignKey(
        'Grupo',
        on_delete=models.CASCADE,
    )
    grupo = models.ForeignKey(
        'Permissao',
        on_delete=models.CASCADE,
    )

class Grupo(models.Model):

    class Meta:
        app_label = "main"

    nome = models.CharField(max_length=255, primary_key=True)

    objects = models.Manager()

