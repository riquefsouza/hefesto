from django.db import models


class Role(models.Model):
    description = models.CharField(max_length=100)

    def __str__(self):
        return self.description